<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
    lang="{{ $locale = app()->getLocale() }}"
    dir="{{ in_array($locale, ['fa', 'ar']) ? 'rtl' : 'ltr' }}"
>
    <head>
        <!-- meta tags -->
        <meta
            http-equiv="Cache-control"
            content="no-cache"
        >

        <meta
            http-equiv="Content-Type"
            content="text/html; charset=utf-8"
        />

        @php
            if ($locale == 'en') {
                $fontFamily = [
                    'regular' => 'Segoe UI, Tahoma, Geneva, Verdana, sans-serif',
                    'bold'    => 'Segoe UI, Tahoma, Geneva, Verdana, sans-serif',
                ];
            }  else {
                $fontFamily = [
                    'regular' => 'Tahoma, Arial, sans-serif',
                    'bold'    => 'Tahoma, Arial, sans-serif',
                ];
            }

            if (in_array($locale, ['ar', 'fa', 'tr'])) {
                $fontFamily = [
                    'regular' => 'DejaVu Sans, Arial Unicode MS, Tahoma, Arial, sans-serif',
                    'bold'    => 'DejaVu Sans, Arial Unicode MS, Tahoma, Arial, sans-serif',
                ];
            }
        @endphp

        <!-- lang supports inclusion -->
        <style type="text/css">
            @charset "UTF-8";

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: {{ $fontFamily['regular'] }};
            }

            body {
                font-size: 11px;
                color: #2C3E50;
                font-family: "{{ $fontFamily['regular'] }}";
                line-height: 1.6;
                background-color: #ffffff;
                unicode-bidi: embed;
            }

            /* Arabic text support */
            body[dir="rtl"],
            body[dir="rtl"] * {
                font-family: "{{ $fontFamily['regular'] }}" !important;
                direction: rtl;
                text-align: right;
            }

            /* Arabic numbers fix */
            .arabic-numbers,
            .amount,
            .price,
            .total,
            .subtotal {
                font-variant-numeric: normal;
                font-feature-settings: normal;
                direction: ltr;
                unicode-bidi: bidi-override;
                display: inline-block;
            }

            b, th {
                font-family: "{{ $fontFamily['bold'] }}";
                font-weight: 600;
            }

            .page-content {
                padding: 20px;
                background: #ffffff;
            }

            .page-header {
                background-color: #2C3E50;
                color: white;
                text-align: center;
                font-size: 24px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 25px 0;
                margin: 0;
                letter-spacing: 1px;
                border-bottom: 3px solid #34495e;
            }

            .logo-container {
                position: absolute;
                top: 20px;
                left: 20px;
                z-index: 10;
                text-align: center;
                width: 200px;
            }

            .logo-container.rtl {
                left: auto;
                right: 20px;
            }

            .logo-container img {
                max-width: 80px;
                height: auto;
                margin-bottom: 8px;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .company-info {
                text-align: center;
                font-family: "{{ $fontFamily['bold'] }}";
            }

            .company-name {
                font-size: 18px;
                font-weight: 700;
                color: #2C3E50;
                margin-bottom: 3px;
                line-height: 1.2;
            }

            .company-tagline {
                font-size: 12px;
                color: #7f8c8d;
                font-weight: 500;
                line-height: 1.2;
            }

            .company-info {
                margin-top: 5px;
                font-family: "{{ $fontFamily['bold'] }}";
            }

            .company-name {
                font-size: 16px;
                font-weight: 700;
                color: #2C3E50;
                margin-bottom: 2px;
                line-height: 1.2;
            }

            .company-tagline {
                font-size: 11px;
                color: #6c757d;
                font-weight: 500;
                line-height: 1.2;
            }

            .page-header b {
                display: inline-block;
                vertical-align: middle;
            }

            .small-text {
                font-size: 7px;
            }

            table {
                width: 100%;
                border-spacing: 0;
                border-collapse: collapse;
                margin-bottom: 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                overflow: hidden;
            }

            table thead th {
                background-color: #34495e;
                color: white;
                padding: 12px 18px;
                text-align: left;
                font-weight: 600;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                border-bottom: 2px solid #2c3e50;
            }

            table.rtl thead tr th {
                text-align: right;
            }

            table tbody td {
                padding: 12px 18px;
                border-bottom: 1px solid #E8EEF7;
                text-align: left;
                vertical-align: top;
                background-color: #ffffff;
                transition: background-color 0.2s ease;
            }

            table tbody tr:nth-child(even) td {
                background-color: #F8FAFC;
            }

            table tbody tr:hover td {
                background-color: #E8EEF7;
            }

            table.rtl tbody tr td {
                text-align: right;
            }

            .text-center {
                text-align: center !important;
            }

            .text-right {
                text-align: right;
            }

            .text-left {
                text-align: left;
            }

            /* RTL specific styles */
            body[dir="rtl"] .text-center {
                text-align: center !important;
            }

            .text-center {
                text-align: center !important;
            }

            .text-right {
                text-align: right;
            }

            .text-left {
                text-align: left;
            }

            /* RTL specific styles */
            .rtl .text-center {
                text-align: center !important;
            }

            .summary {
                width: 100%;
                display: inline-block;
            }

            .summary table {
                float: right;
                width: 280px;
                padding: 15px;
                background-color: #ecf0f1;
                border-radius: 6px;
                border: 2px solid #bdc3c7;
                white-space: nowrap;
            }

            .summary table.rtl {
                width: 300px;
            }

            .summary table.rtl {
                margin-right: 460px;
            }

            .summary table td {
                padding: 8px 12px;
                border-bottom: 1px solid #dee2e6;
                font-size: 11px;
                color: #495057;
            }

            .summary table td:nth-child(2) {
                text-align: center;
                color: #6c757d;
            }

            .summary table td:nth-child(3) {
                text-align: right;
                font-weight: 600;
                color: #2C3E50;
            }

            .summary table tr:last-child td {
                border-bottom: none;
                font-weight: 700;
                font-size: 12px;
                color: #1a1a1a;
                background-color: rgba(255, 255, 255, 0.8);
            }

            /* Additional RTL support */
            .text-center {
                text-align: center !important;
            }

            body[dir="rtl"] table thead th,
            body[dir="rtl"] table tbody td {
                text-align: right;
            }

            body[dir="rtl"] .text-center {
                text-align: center !important;
            }

            body[dir="rtl"] .summary table {
                float: left;
                margin-right: 0;
                margin-left: auto;
            }

            /* Additional styling improvements */
            .items {
                margin-bottom: 30px;
            }

            .page {
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                background: white;
            }

            strong {
                font-weight: 700;
                color: #2C3E50;
            }

            /* Information table styling */
            .info-table td {
                padding: 8px 18px !important;
                border-bottom: 1px solid #f1f3f5 !important;
                font-size: 11px;
            }

            .info-table b {
                color: #495057;
                font-weight: 600;
            }
        </style>
    </head>

    <body dir="{{ in_array(app()->getLocale(), ['ar', 'fa']) ? 'rtl' : 'ltr' }}">
        <div class="page">
            <!-- Logo and Company Info -->
            <div class="logo-container {{ in_array(app()->getLocale(), ['ar', 'fa']) ? 'rtl' : '' }}">
                <img src="{{ asset('images/logo.png') }}" alt="eTech Valley Logo">
                <div class="company-info">
                    <div class="company-name">eTech Valley</div>
                    <div class="company-tagline">Creative Software Solutions</div>
                </div>
            </div>

            <!-- Header -->
            <div class="page-header">
                <b>@lang('admin::app.quotes.index.pdf.title')</b>
            </div>

            <div class="page-content">
                <!-- Invoice Information -->
                <table class="info-table {{ in_array(app()->getLocale(), ['ar', 'fa']) ? 'rtl' : '' }}">
                    <tbody>
                        <tr>
                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.quotes.index.pdf.quote-id'):
                                </b>

                                <span>
                                    #{{ $quote->id }}
                                </span>
                            </td>

                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.quotes.index.pdf.person'):
                                </b>

                                <span>
                                    {{ $quote->person->name }}
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.quotes.index.pdf.sales-person'):
                                </b>

                                <span>
                                    {{ $quote->user->name }}
                                </span>
                            </td>

                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.quotes.index.pdf.subject'):
                                </b>

                                <span>
                                    {{ $quote->subject }}
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.quotes.index.pdf.date'):
                                </b>

                                <span>
                                    {{ core()->formatDate($quote->created_at, 'd-m-Y') }}
                                </span>
                            </td>

                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.quotes.index.pdf.sales-person'):
                                </b>

                                <span>
                                    {{ $quote->user->name }}
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.quotes.index.pdf.expired-at'):
                                </b>

                                <span>
                                    {{ core()->formatDate($quote->expired_at, 'd-m-Y') }}
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Billing & Shipping Address -->
                {{-- <table class="{{ $locale }}">
                    <thead>
                        <tr>
                            @if ($quote->billing_address)
                                <th style="width: 50%;">
                                    <b>
                                        @lang('admin::app.quotes.index.pdf.billing-address')
                                    </b>
                                </th>
                            @endif

                            @if ($quote->shipping_address)
                                <th style="width: 50%">
                                    <b>
                                        @lang('admin::app.quotes.index.pdf.shipping-address')
                                    </b>
                                </th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            @if ($quote->billing_address)
                                <td style="width: 50%">
                                    <div>{{ $quote->billing_address['address'] ?? '' }}</div>

                                    <div>{{ $quote->billing_address['postcode'] ?? '' . ' ' .$quote->billing_address['city'] ?? '' }} </div>

                                    <div>{{ $quote->billing_address['state'] ?? '' }}</div>

                                    <div>{{ core()->country_name($quote->billing_address['country'] ?? '') }}</div>
                                </td>
                            @endif

                            @if ($quote->shipping_address)
                                <td style="width: 50%">
                                    <div>{{ $quote->shipping_address['address'] ?? ''}}</div>

                                    <div>{{ $quote->shipping_address['postcode'] ?? '' . ' ' .$quote->shipping_address['city'] ?? '' }} </div>

                                    <div>{{ $quote->shipping_address['state'] ?? '' }}</div>

                                    <div>{{ core()->country_name($quote->shipping_address['country'] ?? '') }}</div>
                                </td>
                            @endif
                        </tr>
                    </tbody>
                </table> --}}

                <!-- Items -->
                <div class="items">
                    <table class="{{ in_array(app()->getLocale(), ['ar', 'fa']) ? 'rtl' : '' }}">
                        <thead>
                            <tr>
                                <th>
                                    @lang('admin::app.quotes.index.pdf.sku')
                                </th>

                                <th>
                                    @lang('admin::app.quotes.index.pdf.product-name')
                                </th>

                                <th>
                                    @lang('admin::app.quotes.index.pdf.price')
                                </th>

                                <th>
                                    @lang('admin::app.quotes.index.pdf.quantity')
                                </th>

                                <th>
                                    @lang('admin::app.quotes.index.pdf.amount')
                                </th>

                                <th>
                                    @lang('admin::app.quotes.index.pdf.discount')
                                </th>

                                <th>
                                    @lang('admin::app.quotes.index.pdf.tax')
                                </th>

                                <th>
                                    @lang('admin::app.quotes.index.pdf.grand-total')
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($quote->items as $item)
                                <tr>
                                    <td>{{ $item->sku }}</td>

                                    <td>
                                        {{ $item->name }}
                                    </td>

                                    <td>{!! core()->formatBasePrice($item->price, true) !!}</td>

                                    <td class="text-center">{{ $item->quantity }}</td>

                                    <td class="text-center amount">{!! core()->formatBasePrice($item->total, true) !!}</td>

                                    <td class="text-center amount">{!! core()->formatBasePrice($item->discount_amount, true) !!}</td>

                                    <td class="text-center amount">{!! core()->formatBasePrice($item->tax_amount, true) !!}</td>

                                    <td class="text-center amount">{!! core()->formatBasePrice($item->total + $item->tax_amount - $item->discount_amount, true) !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

               <!-- Summary Table -->
                <div class="summary">
                    <table class="{{ in_array(app()->getLocale(), ['ar', 'fa']) ? 'rtl' : '' }}">
                        <tbody>
                            <tr>
                                <td>@lang('admin::app.quotes.index.pdf.sub-total')</td>
                                <td>-</td>
                                <td class="subtotal">{!! core()->formatBasePrice($quote->sub_total, true) !!}</td>
                            </tr>

                            <tr>
                                <td>@lang('admin::app.quotes.index.pdf.tax')</td>
                                <td>-</td>
                                <td>{!! core()->formatBasePrice($quote->tax_amount, true) !!}</td>
                            </tr>

                            <tr>
                                <td>@lang('admin::app.quotes.index.pdf.discount')</td>
                                <td>-</td>
                                <td>{!! core()->formatBasePrice($quote->discount_amount, true) !!}</td>
                            </tr>

                            <tr>
                                <td>@lang('admin::app.quotes.index.pdf.adjustment')</td>
                                <td>-</td>
                                <td>{!! core()->formatBasePrice($quote->adjustment_amount, true) !!}</td>
                            </tr>

                            <tr>
                                <td><strong>@lang('admin::app.quotes.index.pdf.grand-total')</strong></td>
                                <td><strong>-</strong></td>
                                <td><strong class="total">{!! core()->formatBasePrice($quote->grand_total, true) !!}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
