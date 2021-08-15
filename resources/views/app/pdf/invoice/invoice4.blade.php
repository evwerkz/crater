<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style type="text/css">
        /* -- Base -- */

        body {
            font-family: "DejaVu Sans";
            margin: 0;
            padding: 170px 0 130px 0;
        }

        html {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
        }

        hr {
            color: rgba(0, 0, 0, 0.2);
            border: 0.5px solid #EAF1FB;
        }

        /* -- Header -- */

        header {
            margin-top: 30px;
            width: 100%;
            padding: 0px 30px;
        }

        .header-logo {
            height: 50px;
            text-transform: capitalize;
            color: #817AE3;
            padding-top: 0px;
        }

        .company-address-container {
            width: 50%;
            padding-left: 80px;
            margin-bottom: 2px;
        }

        .company-address {
            margin-top: 12px;
            font-size: 12px;
            line-height: 15px;
            color: #595959;
            word-wrap: break-word;
        }

        /* -- Company Address */

        .company-address-container {
            width: auto;
            margin-bottom: 2px;
        }

        .company-address-container h1 {
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            margin-bottom: 0px;
            margin-top: 10px;
        }

        .company-address {
            margin-top: 2px;
            font-size: 12px;
            line-height: 15px;
            color: #595959;
        }

        /* -- Content Wrapper  */

        .customer-address-container {
            width: 50%;
            float: left;
            padding-left: 30px;
        }

        /* -- Billing -- */

        .billing-address-container {
            display: block;
            float: left;
            padding-top: 20px;
        }

        .billing-address-name {
            padding: 0px;
            font-size: 15px;
            line-height: 22px;
            margin: 0px;
        }

        .billing-address {
            font-size: 13px;
            line-height: 15px;
            color: #1d1d1d;
            margin: 0px;
        }

        /*  -- Estimate Details -- */

        .invoice-details-container {
            display: block;
            float: right;
            padding: 20px 30px 0 0;
        }

        .attribute-label {
            font-size: 12px;
            line-height: 18px;
            text-align: left;
            color: #1D1D1D
        }

        .attribute-value {
            font-size: 12px;
            line-height: 18px;
            text-align: right;
        }

        /* -- Items Table -- */

        .items-table {
            margin-top: 35px;
            padding: 0px 30px 10px 30px;
            page-break-before: avoid;
            page-break-after: auto;
        }

        .items-table hr {
            height: 0.1px;
        }

        .item-table-heading {
            font-size: 13.5;
            text-align: center;
            color: rgba(0, 0, 0, 0.85);
            padding: 5px;
            color: #1D1D1D;
        }

        tr.item-table-heading-row th {
            border-bottom: 0.620315px solid #E8E8E8;
            font-size: 12px;
            line-height: 18px;
        }

        tr.item-row td {
            font-size: 12px;
            line-height: 18px;
        }

        .item-cell {
            font-size: 13px;
            text-align: center;
            padding: 5px;
            padding-top: 10px;
            color: #040405;
        }

        .item-description {
            color: #404040;
            font-size: 12px;
            line-height: 14px;
        }

        .item-cell-table-hr {
            margin: 0 30px 0 30px;
        }

        /* -- Total Display Table -- */

        .total-display-container {
            padding: 0 25px;
        }

        .total-display-table {
            page-break-inside: avoid;
            page-break-before: auto;
            page-break-after: auto;
            margin-left: 500px;
            margin-top: 20px;
        }

        .total-table-attribute-label {
            font-size: 12px;
            color: #55547A;
            text-align: left;
            padding-left: 10px;
        }

        .total-table-attribute-value {
            font-weight: bold;
            text-align: right;
            font-size: 12px;
            color: #040405;
            padding-right: 10px;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .total-border-left {
            border: 1px solid #E8E8E8 !important;
            border-right: 0px !important;
            padding: 8px !important;
        }

        .total-border-right {
            border: 1px solid #E8E8E8 !important;
            border-left: 0px !important;
            padding: 8px !important;
        }

        /* -- Notes -- */
        .notes {
            font-size: 12px;
            color: #040405;
            margin-top: 15px;
            margin-left: 30px;
            margin-right: 30px;
            width: auto;
            text-align: left;
            page-break-inside: avoid;
        }

        .notes-label {
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            color: #040405;
            width: 108px;
            height: 19.87px;
            padding-bottom: 10px;
        }

        /* -- Helpers -- */

        .text-center {
            text-align: center
        }

        table .text-left {
            text-align: left;
        }

        table .text-right {
            text-align: right;
        }

        .border-0 {
            border: none;
        }

        .py-2 {
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .py-8 {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .py-3 {
            padding: 3px 0;
        }

        .pr-20 {
            padding-right: 20px;
        }

        .pr-10 {
            padding-right: 10px;
        }

        .pl-20 {
            padding-left: 20px;
        }

        .pl-10 {
            padding-left: 10px;
        }

        .pl-0 {
            padding-left: 0;
        }

        header {
            position: fixed;
            top: 0;
            left: 0px;
            right: 0px;
            height: 170px;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0px;
            right: 0px;
            height: 100px;
        }

        .footer-wrapper {
            padding: 0 30px;
        }

        .footer-wrapper .footer-label {
            display: inline-block;
            width: 60px;
            line-height: 14px;
            height: 14px;
        }

        .footer-table {
            border-top: 0.620315px solid #E8E8E8;
            color: #595959;
            font-size: 10px;
            line-height: 14px;
        }

        .footer-table a {
            color: #595959;
            text-decoration: none;
        }
    </style>
</head>

<body>
<header>
    <table width="100%">
        <tr>
            <td width="50%" class="header-section-left">
                @if($logo)
                    <img class="header-logo" src="{{ $logo }}" alt="Company Logo">
                @else
                    <h1 class="header-logo"> {{$invoice->user->company->name}} </h1>
                @endif
            </td>
            <td width="50%" class="text-right company-address-container company-address">
                {!! $company_address !!}
            </td>
        </tr>
    </table>
</header>

<footer>
    <div class="footer-wrapper">
        <table width="100%" class="footer-table" cellspacing="0" border="0">
            <tr>
                <td width="30%">
                    <b>Eugen Batsin ev.werkz</b><br>
                    Goetersstr. 42<br>
                    41747 Viersen
                </td>
                <td width="40%">
                    <span class="footer-label">Email</span> <a href="mailto:ev.werkz@gmail.com">ev.werkz@gmail.com</a><br>
                    <span class="footer-label">Mobil</span> +49 175 7367 680<br>
                    <span class="footer-label">Web</span> <a href="https://www.eugendev.com/">www.eugendev.com</a>
                </td>
                <td width="40%">
                    <span class="footer-label">Steuer Nr.</span> 102/5009/4157<br>
                    <span class="footer-label">IBAN</span> DE 0611 0101 0029 4065 2919<br>
                    <span class="footer-label">BIC</span> SOBKDEBBXXX Solarisbank AG
                </td>
            </tr>
        </table>
    </div>
</footer>

<div class="content-wrapper">
    <div class="main-content">
        <div class="customer-address-container">
            <div class="billing-address-container">
                @if($invoice->user->billingaddress)
                    @if($invoice->user->billingaddress->name)
                        <p class="billing-address-name">
                            {{$invoice->user->billingaddress->name}}
                        </p>
                    @endif
                    <p class="billing-address">
                        @if($invoice->user->billingaddress->address_street_1)
                            {!! nl2br(htmlspecialchars($invoice->user->billingaddress->address_street_1)) !!}<br>
                        @endif
                        @if($invoice->user->billingaddress->address_street_2)
                            {!! nl2br(htmlspecialchars($invoice->user->billingaddress->address_street_2)) !!}<br>
                        @endif
                        @if($invoice->user->billingaddress->zip)
                            {{$invoice->user->billingaddress->zip}},
                        @endif
                        @if($invoice->user->billingaddress->city && $invoice->user->billingaddress->city)
                            {{$invoice->user->billingaddress->city}}
                        @endif
                    </p>
                @endif
            </div>
            <div style="clear: both;"></div>
        </div>

        <div class="invoice-details-container">
            <table>
                <tr>
                    <td class="attribute-label">@lang('pdf_invoice_number')</td>
                    <td class="attribute-value"> &nbsp;{{$invoice->invoice_number}}</td>
                </tr>
                <tr>
                    <td class="attribute-label">@lang('pdf_invoice_date')</td>
                    <td class="attribute-value"> &nbsp;{{$invoice->formattedInvoiceDate}}</td>
                </tr>
                <tr>
                    <td class="attribute-label">@lang('pdf_invoice_due_date')</td>
                    <td class="attribute-value"> &nbsp;{{$invoice->formattedDueDate}}</td>
                </tr>
            </table>
        </div>
        <div style="clear: both;"></div>
    </div>

    <!-- invoice table -->

    @include('app.pdf.invoice.partials.table')

    <!-- end invoice table -->

    <div class="notes">
        <hr>
    </div>

    <div class="notes">
        @if($notes)
            {!! $notes !!}
        @endif
    </div>

    <div class="notes">
        <p><strong>Hinweise</strong></p>
        <p>Wenn nicht anders angegeben entspricht das Leistungsdatum dem Rechnungsdatum.
        <br>Gemäß § 19 Abs. 1 UStG wird keine Umsatzsteuer ausgewiesen.</p>
    </div>

</div>

</body>

</html>
