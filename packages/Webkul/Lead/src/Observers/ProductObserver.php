<?php

namespace Webkul\Lead\Observers;

use Illuminate\Support\Facades\DB;
use Webkul\Lead\Models\Product;
use Webkul\Lead\Repositories\LeadRepository;

class ProductObserver
{
    /**
     * Create a new observer instance.
     */
    public function __construct(
        protected LeadRepository $leadRepository
    ) {
    }

    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {
        // Only update if we have a valid lead_id and events are enabled
        if ($product->lead_id && $product->getEventDispatcher()) {
            $this->updateLeadValue($product->lead_id);
        }
    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        // Only update if we have a valid lead_id and events are enabled
        if ($product->lead_id && $product->getEventDispatcher()) {
            $this->updateLeadValue($product->lead_id);
        }
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        // Only update if we have a valid lead_id and events are enabled
        if ($product->lead_id && $product->getEventDispatcher()) {
            $this->updateLeadValue($product->lead_id);
        }
    }

    /**
     * Update lead value based on products total
     */
    protected function updateLeadValue($leadId): void
    {
        if (!$leadId) {
            return;
        }

        // Use direct database query for most accurate sum
        $totalLeadValue = DB::table('lead_products')
            ->where('lead_id', $leadId)
            ->sum('amount');

        // Update lead_value in database
        DB::table('leads')
            ->where('id', $leadId)
            ->update(['lead_value' => $totalLeadValue, 'updated_at' => now()]);

        // Update attribute value
        try {
            app('Webkul\Attribute\Repositories\AttributeValueRepository')->save([
                'entity_id' => $leadId,
                'entity_type' => 'leads',
                'lead_value' => $totalLeadValue,
            ]);
        } catch (\Exception $e) {
            // Log error but don't break the flow
            \Log::warning('Failed to update lead_value attribute: ' . $e->getMessage());
        }
    }
}
