<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{url('public/logo', $general_setting->site_logo)}}" />
    <title>{{$general_setting->site_title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{url('manifest.json')}}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/jquery-timepicker/jquery.timepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/awesome-bootstrap-checkbox.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap-select.min.css') ?>" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/font-awesome/css/font-awesome.min.css') ?>" type="text/css">
    <!-- Drip icon font-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/dripicons/webfont.css') ?>" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo asset('public/css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" type="text/css">
    <!-- virtual keybord stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/keyboard/css/keyboard.css') ?>" type="text/css">
    <!-- date range stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/daterange/css/daterangepicker.min.css') ?>" type="text/css">
    <!-- table sorter stylesheet-->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/vendor/datatable/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('public/css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/css/dropzone.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('public/css/style.css') ?>">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">




    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery.timepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/popper.js/umd/popper.min.js') ?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap-toggle/js/bootstrap-toggle.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/keyboard/js/jquery.keyboard.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/keyboard/js/jquery.keyboard.extension-autocomplete.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery.cookie/jquery.cookie.js') ?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/chart.js/Chart.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/js/charts-custom.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/js/front.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/moment.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/knockout-3.4.2.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/daterangepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/js/dropzone.js') ?>"></script>

    <!-- table sorter js-->
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/pdfmake.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/vfs_fonts.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/jquery.dataTables.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.bootstrap4.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.buttons.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.bootstrap4.min.js') ?>">"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.colVis.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.html5.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.print.min.js') ?>"></script>

    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/sum().js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.checkboxes.min.js') ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo asset('public/css/custom-'.$general_setting->theme) ?>" type="text/css" id="custom-style">

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js" integrity="sha512-x/vqovXY/Q4b+rNjgiheBsA/vbWA3IVvsS8lkQSX1gQ4ggSJx38oI2vREZXpTzhAv6tNUaX81E7QBBzkpDQayA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body onload="myFunction()">
<div id="loader"></div>
<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="{{url('/')}}"> <i class="dripicons-meter"></i> <span>{{ __('file.dashboard') }}</span></a></li>
                <?php
                $role = DB::table('roles')->find(Auth::user()->role_id);
                $category_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'category'],
                        ['role_id', $role->id] ])->first();
                $index_permission = DB::table('permissions')->where('name', 'products-index')->first();
                $index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $print_barcode = DB::table('permissions')->where('name', 'print_barcode')->first();
                $print_barcode_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $print_barcode->id],
                    ['role_id', $role->id]
                ])->first();

                $stock_count = DB::table('permissions')->where('name', 'stock_count')->first();
                $stock_count_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $stock_count->id],
                    ['role_id', $role->id]
                ])->first();

                $adjustment = DB::table('permissions')->where('name', 'adjustment')->first();
                $adjustment_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $adjustment->id],
                    ['role_id', $role->id]
                ])->first();
                ?>

                <?php
                $sale_index_permission = DB::table('permissions')->where('name', 'sales-index')->first();
                $sale_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $sale_index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $gift_card_permission = DB::table('permissions')->where('name', 'gift_card')->first();
                $gift_card_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $gift_card_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $coupon_permission = DB::table('permissions')->where('name', 'coupon')->first();
                $coupon_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $coupon_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $delivery_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'delivery'],
                        ['role_id', $role->id] ])->first();

                $sale_add_permission = DB::table('permissions')->where('name', 'sales-add')->first();
                $sale_add_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $sale_add_permission->id],
                    ['role_id', $role->id]
                ])->first();
                ?>


                <?php
                $item_index_permission = DB::table('permissions')->where('name', 'trimming-index')->first();
                $item_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $item_index_permission->id],
                    ['role_id', $role->id]
                ])->first();
                ?>

                @if($item_index_permission_active)
                    <li><a href="#items" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bars" aria-hidden="true"></i><span>Items</span></a>
                        <ul id="items" class="collapse list-unstyled ">
                            <!--<li id="payment-terms-list"><a href="{{url('payment_term')}}">Payment Terms</a></li>-->
                            <li id="trimming-list"><a href="{{url('treams')}}">Trimming</a></li>
                        </ul>
                    </li>
                @endif
                <?php
                $cost_sheet_index_permission = DB::table('permissions')->where('name', 'cost-sheet-index')->first();
                $cost_sheet_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $cost_sheet_index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $purchase_order_index_permission = DB::table('permissions')->where('name', 'po-index')->first();
                $purchase_order_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $purchase_order_index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $purchase_contract_index_permission = DB::table('permissions')->where('name', 'purchase-contract-index')->first();
                $purchase_contract_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $purchase_contract_index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $proforma_invoice_index_permission = DB::table('permissions')->where('name', 'proforma-invoice-index')->first();
                $proforma_invoice_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $proforma_invoice_index_permission->id],
                    ['role_id', $role->id]
                ])->first();
                ?>

                @if($cost_sheet_index_permission_active || $purchase_order_index_permission_active || $purchase_contract_index_permission_active || $proforma_invoice_index_permission_active)
                    <li><a href="#order-summary" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-cart"></i><span>Order Management</span></a>
                        <ul id="order-summary" class="collapse list-unstyled ">
                            @if($cost_sheet_index_permission_active)
                                <li id="cost-sheet-list-menu"><a href="{{route('cost_sheet.index')}}">Cost Sheet</a></li>
                            @endif
                            @if($purchase_order_index_permission_active)
                                <li id="purchase-order-menu-list"><a href="{{url('purchase_order')}}">Purchase Order</a></li>
                            @endif
                            @if($purchase_contract_index_permission_active)
                                <li id="purchase-contract-list"><a href="{{route('purchase_contract.index')}}">Purchase Contract</a></li>
                            @endif
                            @if($proforma_invoice_index_permission_active)
                                <li id="proforma-invoice-menu"><a href="{{route('proforma_invoice.index')}}">Proforma Invoice</a></li>
                            @endif
                            <li id="cost-breakdown-menu"><a href="{{route('cost_breakdowns.index')}}">Cost Breakdown</a></li>

                                <?php
                                $index_permission_export = DB::table('permissions')->where('name', 'export-index')->first();
                                $index_permission_active_export = DB::table('role_has_permissions')->where([
                                    ['permission_id', $index_permission_export->id],
                                    ['role_id', $role->id]
                                ])->first();
                                ?>
                                @if($index_permission_active_export)
                                    <li id="export-summary-list-menu"><a href="{{route('export.index')}}">Export Status</a></li>
                                @endif


                        </ul>
                    </li>
                @endif



                <?php
                $index_permission = DB::table('permissions')->where('name', 'expenses-index')->first();
                $index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $index_permission->id],
                    ['role_id', $role->id]
                ])->first();
                ?>
                @if($index_permission_active)
                    <li><a href="#expense" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-credit-card-alt" aria-hidden="true"></i><span>{{trans('file.Expense')}}</span></a>
                        <ul id="expense" class="collapse list-unstyled ">
                            <li id="exp-cat-menu"><a href="{{route('expense_categories.index')}}">{{trans('file.Expense Category')}}</a></li>
                            <li id="exp-list-menu"><a href="{{route('expenses.index')}}">{{trans('file.Expense List')}}</a></li>
                            <li id="exp-list-menu"><a href="{{route('cost-budget.index')}}">{{trans('file.Cost Budget')}}</a></li>
                            <?php
                            $add_permission = DB::table('permissions')->where('name', 'expenses-add')->first();
                            $add_permission_active = DB::table('role_has_permissions')->where([
                                ['permission_id', $add_permission->id],
                                ['role_id', $role->id]
                            ])->first();
                            ?>
                            {{--
                              @if($add_permission_active)
                              <li><a id="add-expense" href=""> {{trans('file.Add Expense')}}</a></li>
                              @endif
                            --}}
                        </ul>
                    </li>
                @endif

                <?php
                $income_source_permission = DB::table('permissions')->where('name', 'income-source')->first();
                $income_source_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $income_source_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $income_list_permission = DB::table('permissions')->where('name', 'income-list')->first();
                $income_list_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $income_list_permission->id],
                    ['role_id', $role->id]
                ])->first();
                ?>


                @if($income_source_permission_active || $income_list_permission_active)
                    <li><a href="#income" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-wallet"></i><span>Income</span></a>
                        <ul id="income" class="collapse list-unstyled ">
                            @if($income_source_permission_active)
                                <li id="income-source-menu"><a href="{{ route('income_source.index') }}">Income Source</a></li>
                            @endif
                            @if($income_list_permission_active)
                                <li id="income-list-menu"><a href="{{ route('incomes.index') }}">Income List</a></li>
                            @endif
                        </ul>
                    </li>
                @endif

                {{--
                  <li><a href="#bank" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-return"></i><span>Bank</span></a>
                      <ul id="bank" class="collapse list-unstyled ">

                      <li id="bank-menu"><a href="{{route('banks.index')}}">Bank</a></li>
                      <li id="bank-branch-menu"><a href="{{route('bank_branches.index')}}">Bank Branch</a></li>
                      <li id="bank-account-menu"><a href="{{route('bank_accounts.index')}}">Bank Account</a></li>
                      </ul>
                  </li>
                --}}




                <?php
                $index_permission = DB::table('permissions')->where('name', 'quotes-index')->first();
                $index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $index_permission->id],
                    ['role_id', $role->id]
                ])->first();
                ?>
                @if($index_permission_active)
                    <li><a href="#quotation" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-document"></i><span>{{trans('file.Quotation')}}</span><span></a>
                        <ul id="quotation" class="collapse list-unstyled ">
                            <li id="quotation-list-menu"><a href="{{route('quotations.index')}}">{{trans('file.Quotation List')}}</a></li>
                            <?php
                            $add_permission = DB::table('permissions')->where('name', 'quotes-add')->first();
                            $add_permission_active = DB::table('role_has_permissions')->where([
                                ['permission_id', $add_permission->id],
                                ['role_id', $role->id]
                            ])->first();
                            ?>
                            @if($add_permission_active)
                                <li id="quotation-create-menu"><a href="{{route('quotations.create')}}">{{trans('file.Add Quotation')}}</a></li>
                            @endif
                        </ul>
                    </li>
                @endif

                <?php
                $sale_return_index_permission = DB::table('permissions')->where('name', 'returns-index')->first();

                $sale_return_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $sale_return_index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $purchase_return_index_permission = DB::table('permissions')->where('name', 'purchase-return-index')->first();

                $purchase_return_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $purchase_return_index_permission->id],
                    ['role_id', $role->id]
                ])->first();
                ?>

                <?php
                $index_permission = DB::table('permissions')->where('name', 'account-index')->first();
                $index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $money_transfer_permission = DB::table('permissions')->where('name', 'money-transfer')->first();
                $money_transfer_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $money_transfer_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $balance_sheet_permission = DB::table('permissions')->where('name', 'balance-sheet')->first();
                $balance_sheet_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $balance_sheet_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $account_statement_permission = DB::table('permissions')->where('name', 'account-statement')->first();
                $account_statement_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $account_statement_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $deposit_permission = DB::table('permissions')->where('name', 'account-deposit')->first();
                $deposit_permission_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $deposit_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $withdraw_permission = DB::table('permissions')->where('name', 'account-withdraw')->first();
                $withdraw_permission_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $withdraw_permission->id],
                    ['role_id', $role->id]
                ])->first();

                ?>
                @if($index_permission_active || $balance_sheet_permission_active || $account_statement_permission_active || $withdraw_permission_permission_active || $deposit_permission_permission_active || $money_transfer_permission_active)
                    <li class=""><a href="#account" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-briefcase"></i><span>{{trans('file.Accounting')}}</span></a>
                        <ul id="account" class="collapse list-unstyled ">
                            @if($index_permission_active)
                                <li id="account-list-menu"><a href="{{route('banks.index')}}">Bank</a></li>
                                <li id="account-list-menu"><a href="{{route('bank_branches.index')}}">Branch</a></li>
                                <li id="account-list-menu"><a href="{{route('accounts.index')}}">{{trans('file.Account List')}}</a></li>
                                {{--
                                       <li><a id="add-account" href="">{{trans('file.Add Account')}}</a></li>
                                 --}}

                            @endif

                            @if($withdraw_permission_permission_active)
                                <li><a id="add-withdraw" href="{{route('withdraws.index')}}">{{trans('Withdraw List')}}</a></li>
                            @endif

                            @if($deposit_permission_permission_active)
                                <li><a id="add-deposit" href="{{route('deposits.index')}}">{{trans('Deposit List')}}</a></li>
                            @endif
                            @if($money_transfer_permission_active)
                                <li id="money-transfer-menu"><a href="{{route('money-transfers.index')}}">{{trans('Fund Transfer')}}</a></li>
                            @endif
                            @if($balance_sheet_permission_active)
                                <li id="balance-sheet-menu"><a href="{{route('accounts.balancesheet')}}">{{trans('file.Balance Sheet')}}</a></li>
                            @endif
                            @if($account_statement_permission_active)
                                <li id="account-statement-menu"><a id="account-statement" href="">{{trans('file.Account Statement')}}</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                <?php
                $department = DB::table('permissions')->where('name', 'department')->first();
                $department_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $department->id],
                    ['role_id', $role->id]
                ])->first();
                $index_employee = DB::table('permissions')->where('name', 'employees-index')->first();
                $index_employee_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $index_employee->id],
                    ['role_id', $role->id]
                ])->first();
                $attendance = DB::table('permissions')->where('name', 'attendance')->first();
                $attendance_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $attendance->id],
                    ['role_id', $role->id]
                ])->first();
                $payroll = DB::table('permissions')->where('name', 'payroll')->first();
                $payroll_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $payroll->id],
                    ['role_id', $role->id]
                ])->first();
                ?>

                @if(Auth::user()->role_id != 5)
                    @if($department_active || $index_employee_active || $payroll_active)
                        <li class=""><a href="#hrm" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user-group"></i><span>HRM</span></a>
                            <ul id="hrm" class="collapse list-unstyled ">
                                @if($department_active)
                                    <li id="dept-menu"><a href="{{route('departments.index')}}">{{trans('file.Department')}}</a></li>
                                @endif
                                @if($index_employee_active)
                                    <li id="employee-menu"><a href="{{route('employees.index')}}">{{trans('file.Employee')}}</a></li>
                                @endif
                                {{--
                                  @if($attendance_active)
                                  <li id="attendance-menu"><a href="{{route('attendance.index')}}">{{trans('file.Attendance')}}</a></li>
                                  <li id="holiday-menu"><a href="{{route('holidays.index')}}">{{trans('file.Holiday')}}</a></li>
                                  @endif
                                 --}}

                                @if($payroll_active)
                                    <li id="payroll-menu"><a href="{{route('payroll.index')}}">{{trans('file.Payroll')}}</a></li>
                                @endif
                                <li id="salary-sheet"><a href="{{route('salary-sheet-index')}}">{{trans('file.Salary Sheet')}}</a></li>

                            </ul>
                        </li>
                    @endif
                @endif

                <?php
                $user_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'users-index'],
                        ['role_id', $role->id] ])->first();

                $customer_index_permission = DB::table('permissions')->where('name', 'customers-index')->first();

                $customer_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $customer_index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $biller_index_permission = DB::table('permissions')->where('name', 'billers-index')->first();

                $biller_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $biller_index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $supplier_index_permission = DB::table('permissions')->where('name', 'suppliers-index')->first();

                $supplier_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $supplier_index_permission->id],
                    ['role_id', $role->id]
                ])->first();
                ?>



                @if($user_index_permission_active || $customer_index_permission_active || $biller_index_permission_active || $supplier_index_permission_active)
                    <li><a href="#people" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user"></i><span>{{trans('Contacts')}}</span></a>
                        <ul id="people" class="collapse list-unstyled ">
                            @if($customer_index_permission_active)
                                <li id="customer-list-menu"><a href="{{route('customer.index')}}">{{trans('Customers')}}</a></li>
                                <?php
                                $customer_add_permission = DB::table('permissions')->where('name', 'customers-add')->first();
                                $customer_add_permission_active = DB::table('role_has_permissions')->where([
                                    ['permission_id', $customer_add_permission->id],
                                    ['role_id', $role->id]
                                ])->first();
                                ?>
                                @if($customer_add_permission_active)
                                    <!--<li id="customer-create-menu"><a href="{{route('customer.create')}}">{{trans('file.Add Customer')}}</a></li>-->
                                @endif
                            @endif
                            <li id="ship-list-menu"><a href="{{url('/ship_to')}}">{{trans('Ship To')}}</a></li>
                            {{--
                                 <li id="applicant-list-menu"><a href="{{url('/applicant')}}">{{trans('Applicant')}}</a></li>
                             --}}
                            <li id="vendor-list-menu"><a href="{{route('vendors.index')}}">{{trans('Vendor / Shipper')}}</a></li>
                            <li id="invoice-list-menu"><a href="{{url('/invoice_to')}}">{{trans('Invoice To')}}</a></li>
                            <li id="applicant-list-menu"><a href="{{url('/notify_party')}}">{{trans('Consignee & Notify Party')}}</a></li>
                            @if($user_index_permission_active)
                                <li id="user-list-menu"><a href="{{route('user.index')}}">{{trans('Users')}}</a></li>
                                <?php $user_add_permission_active = DB::table('permissions')
                                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                                    ->where([
                                        ['permissions.name', 'users-add'],
                                        ['role_id', $role->id] ])->first();
                                ?>
                                @if($user_add_permission_active)
                                    <!--<li id="user-create-menu"><a href="{{route('user.create')}}">{{trans('file.Add User')}}</a></li>-->
                                @endif
                            @endif



                            @if($biller_index_permission_active)
                                <!--<li id="biller-list-menu"><a href="{{route('biller.index')}}">{{trans('file.Biller List')}}</a></li>-->
                                <?php
                                $biller_add_permission = DB::table('permissions')->where('name', 'billers-add')->first();
                                $biller_add_permission_active = DB::table('role_has_permissions')->where([
                                    ['permission_id', $biller_add_permission->id],
                                    ['role_id', $role->id]
                                ])->first();
                                ?>
                                @if($biller_add_permission_active)
                                    <!--<li id="biller-create-menu"><a href="{{route('biller.create')}}">{{trans('file.Add Biller')}}</a></li>-->
                                @endif
                            @endif

                            @if($supplier_index_permission_active)
                                <!--<li id="supplier-list-menu"><a href="{{route('supplier.index')}}">{{trans('file.Supplier List')}}</a></li>-->
                                <?php
                                $supplier_add_permission = DB::table('permissions')->where('name', 'suppliers-add')->first();
                                $supplier_add_permission_active = DB::table('role_has_permissions')->where([
                                    ['permission_id', $supplier_add_permission->id],
                                    ['role_id', $role->id]
                                ])->first();
                                ?>
                                @if($supplier_add_permission_active)
                                    <!--<li id="supplier-create-menu"><a href="{{route('supplier.create')}}">{{trans('file.Add Supplier')}}</a></li>-->
                                @endif

                            @endif
                        </ul>
                    </li>
                @endif
                <?php

                $reminder_index_permission = DB::table('permissions')->where('name','reminder-index')->first();
                $reminder_index_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $reminder_index_permission->id],
                    ['role_id', $role->id]
                ])->first();

                ?>

                <?php
                $profit_loss_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'profit-loss'],
                        ['role_id', $role->id] ])->first();
                $best_seller_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'best-seller'],
                        ['role_id', $role->id] ])->first();
                $warehouse_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'warehouse-report'],
                        ['role_id', $role->id] ])->first();
                $warehouse_stock_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'warehouse-stock-report'],
                        ['role_id', $role->id] ])->first();
                $product_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'product-report'],
                        ['role_id', $role->id] ])->first();
                $daily_sale_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'daily-sale'],
                        ['role_id', $role->id] ])->first();
                $monthly_sale_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'monthly-sale'],
                        ['role_id', $role->id]])->first();
                $daily_purchase_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'daily-purchase'],
                        ['role_id', $role->id] ])->first();
                $monthly_purchase_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'monthly-purchase'],
                        ['role_id', $role->id] ])->first();
                $purchase_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'purchase-report'],
                        ['role_id', $role->id] ])->first();
                $sale_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'sale-report'],
                        ['role_id', $role->id] ])->first();
                $payment_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'payment-report'],
                        ['role_id', $role->id] ])->first();
                $product_qty_alert_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'product-qty-alert'],
                        ['role_id', $role->id] ])->first();
                $user_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'user-report'],
                        ['role_id', $role->id] ])->first();

                $customer_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'customer-report'],
                        ['role_id', $role->id] ])->first();
                $supplier_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'supplier-report'],
                        ['role_id', $role->id] ])->first();
                $due_report_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'due-report'],
                        ['role_id', $role->id] ])->first();
                ?>


                <?php

                $interest_permission = DB::table('permissions')->where('name', 'interest')->first();
                $interest_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $interest_permission->id],
                    ['role_id', $role->id]
                ])->first();


                $general_setting_permission = DB::table('permissions')->where('name', 'general_setting')->first();
                $general_setting_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $general_setting_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $backup_database_permission = DB::table('permissions')->where('name', 'backup_database')->first();
                $backup_database_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $backup_database_permission->id],
                    ['role_id', $role->id]
                ])->first();

                $mail_setting_permission = DB::table('permissions')->where('name', 'mail_setting')->first();
                $mail_setting_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $mail_setting_permission->id],
                    ['role_id', $role->id]
                ])->first();


                $user_profile_permission = DB::table('permissions')->where('name', 'uesr-profile')->first();
                $user_profile_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $user_profile_permission->id],
                    ['role_id', $role->id]
                ])->first();

                ?>

                    <li><a href="#export_documents" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-gear"></i><span>{{trans('file.Export Documents')}}</span></a>
                        <ul id="export_documents" class="collapse list-unstyled ">
                            <li><a href="{{url('forwarding-letter')}}">Forwarding-letter</a></li>
                            {{-- <li><ahref="url('commercial-invoice') }}">Commercial-Invoice</a></li> --}}
                            <li><a href="{{url('bill-exchange')}}">Bill-exchange</a></li>
                        </ul>
                    </li>

                @if($interest_permission_active || $user_profile_permission_active || $general_setting_permission_active)
                    <li><a href="#setting" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-gear"></i><span>{{trans('file.settings')}}</span></a>
                        <ul id="setting" class="collapse list-unstyled ">
                            @if($role->id < 2)
                                <li id="role-menu"><a href="{{route('role.index')}}">{{trans('file.Role Permission')}}</a></li>
                            @endif

                            @if($interest_permission_active)
                                <li id="interest-menu"><a href="{{route('interest.index')}}">Interest</a></li>
                            @endif
                            @if($user_profile_permission_active)
                                <li id="user-menu"><a href="{{route('user.profile', ['id' => Auth::id()])}}">{{trans('file.User Profile')}}</a></li>
                            @endif
                            @if($general_setting_permission_active)
                                <li id="general-setting-menu"><a href="{{route('setting.general')}}">{{trans('file.General Setting')}}</a></li>
                            @endif

                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- navbar-->
<header class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i> <!-- <h1 class="d-inline">{{$general_setting->site_title}}</h1> --></a>
                <span class="brand-big">@if($general_setting->site_logo)<img style="width: 100px" src="{{url('public/logo', $general_setting->site_logo)}}" width="50">&nbsp;&nbsp;@endif</span>

                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <?php

                    $empty_database_permission = DB::table('permissions')->where('name', 'empty_database')->first();
                    $empty_database_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $empty_database_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                    ?>
                    <li class="nav-item"><a id="btnFullscreen"><i class="dripicons-expand"></i></a></li>

                    @if($product_qty_alert_active)
                        @if(($alert_product + count(\Auth::user()->unreadNotifications)) > 0)
                            <li class="nav-item" id="notification-icon">
                                <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-bell"></i><span class="badge badge-danger notification-number">{{$alert_product + count(\Auth::user()->unreadNotifications)}}</span>
                                </a>
                                <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default notifications" user="menu">
                                    <li class="notifications">
                                        <a href="{{route('report.qtyAlert')}}" class="btn btn-link"> {{$alert_product}} product exceeds alert quantity</a>
                                    </li>
                                    @foreach(\Auth::user()->unreadNotifications as $key => $notification)
                                        <li class="notifications">
                                            <a href="#" class="btn btn-link">{{ $notification->data['message'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @elseif(count(\Auth::user()->unreadNotifications) > 0)
                            <li class="nav-item" id="notification-icon">
                                <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-bell"></i><span class="badge badge-danger notification-number">{{count(\Auth::user()->unreadNotifications)}}</span>
                                </a>
                                <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default notifications" user="menu">
                                    @foreach(\Auth::user()->unreadNotifications as $key => $notification)
                                        <li class="notifications">
                                            <a href="#" class="btn btn-link">{{ $notification->data['message'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endif





                    <!--  <li class="nav-item">
                      <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-web"></i> <span>{{__('file.language')}}</span> <i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                          <li>
                            <a href="{{ url('language_switch/en') }}" class="btn btn-link"> English</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/es') }}" class="btn btn-link"> Español</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/ar') }}" class="btn btn-link"> عربى</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/pt_BR') }}" class="btn btn-link"> Portuguese</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/fr') }}" class="btn btn-link"> Français</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/de') }}" class="btn btn-link"> Deutsche</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/id') }}" class="btn btn-link"> Malay</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/hi') }}" class="btn btn-link"> हिंदी</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/vi') }}" class="btn btn-link"> Tiếng Việt</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/ru') }}" class="btn btn-link"> русский</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/tr') }}" class="btn btn-link"> Türk</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/it') }}" class="btn btn-link"> Italiano</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/nl') }}" class="btn btn-link"> Nederlands</a>
                          </li>
                          <li>
                            <a href="{{ url('language_switch/lao') }}" class="btn btn-link"> Lao</a>
                          </li>
                      </ul>
                </li> -->
                    <!-- @if(Auth::user()->role_id != 5)
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ url('read_me') }}" target="_blank"><i class="dripicons-information"></i> {{trans('file.Help')}}</a>
                </li>
                @endif -->
                    <li class="nav-item">
                        <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-user"></i> <span>{{ucfirst(Auth::user()->name)}}</span> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                            @if($user_profile_permission_active)
                                <li>
                                    <a href="{{route('user.profile', ['id' => Auth::id()])}}"><i class="dripicons-user"></i> {{trans('file.profile')}}</a>
                                </li>
                            @endif
                            @if($general_setting_permission_active)
                                <li>
                                    <a href="{{route('setting.general')}}"><i class="dripicons-gear"></i> {{trans('file.settings')}}</a>
                                </li>
                            @endif
                            <li>
                                <!--<a href="{{url('my-transactions/'.date('Y').'/'.date('m'))}}"><i class="dripicons-swap"></i> {{trans('file.My Transaction')}}</a>-->
                            </li>
                            @if(Auth::user()->role_id != 5)
                                <li>
                                    <!--<a href="{{url('holidays/my-holiday/'.date('Y').'/'.date('m'))}}"><i class="dripicons-vibrate"></i> {{trans('file.My Holiday')}}</a>-->
                                </li>
                            @endif
                            @if($empty_database_permission_active)
                                <li>
                                    <a onclick="return confirm('Are you sure want to delete? If you do this all of your data will be lost.')" href="{{route('setting.emptyDatabase')}}"><i class="dripicons-stack"></i> {{trans('file.Empty Database')}}</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="dripicons-power"></i>
                                    {{trans('file.logout')}}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="page">

    <!-- notification modal -->
    <div id="notification-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Send Notification')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'notifications.store', 'method' => 'post']) !!}
                    <div class="row">
                        <?php
                        $lims_user_list = DB::table('users')->where([
                            ['is_active', true],
                            ['id', '!=', \Auth::user()->id]
                        ])->get();
                        ?>
                        <div class="col-md-6 form-group">
                            <label>{{trans('file.User')}} *</label>
                            <select name="user_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select user...">
                                @foreach($lims_user_list as $user)
                                    <option value="{{$user->id}}">{{$user->name . ' (' . $user->email. ')'}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>{{trans('file.Message')}} *</label>
                            <textarea rows="5" name="message" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <!-- expense modal -->
    <div id="expense-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Add Expense')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'expenses.store', 'method' => 'post']) !!}
                    <?php
                    $lims_expense_category_list = DB::table('expense_categories')->where('is_active', true)->get();
                    if(Auth::user()->role_id > 2)
                        $lims_warehouse_list = DB::table('warehouses')->where([
                            ['is_active', true],
                            ['id', Auth::user()->warehouse_id]
                        ])->get();
                    else
                        $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                    $lims_account_list = \App\Account::where('is_active', true)->get();

                    ?>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>{{trans('file.Expense Category')}} *</label>
                            <select name="expense_category_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select Expense Category...">
                                @foreach($lims_expense_category_list as $expense_category)
                                    <option value="{{$expense_category->id}}">{{$expense_category->name . ' (' . $expense_category->code. ')'}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--<div class="col-md-6 form-group">-->
                        <!--    <label>{{trans('file.Warehouse')}} *</label>-->
                        <!--    <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select Warehouse...">-->
                        <!--        @foreach($lims_warehouse_list as $warehouse)-->
                        <!--        <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>-->
                        <!--        @endforeach-->
                        <!--    </select>-->
                        <!--</div>-->
                        <div class="col-md-4 form-group">
                            <label>{{trans('Billing Date')}} *</label>
                            <input type="text" name="billing_date" required class="datepicker form-control">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>{{trans('Payment Date')}} *</label>
                            <input type="text" name="payment_date" required class="datepicker form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>{{trans('file.Amount')}} *</label>
                            <input type="number" name="amount" step="any" required class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label> {{trans('file.Account')}}</label>
                            <select class="form-control selectpicker" name="account_id">
                                @foreach($lims_account_list as $account)
                                    @if($account->is_default)
                                        <option selected value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                                    @else
                                        <option value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{trans('file.Note')}}</label>
                        <textarea name="note" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <!-- income modal -->
    <div id="income-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">Add Income</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'incomes.store', 'method' => 'post']) !!}
                    <?php
                    $lims_income_source_list = DB::table('income_sources')->where('is_active', true)->get();
                    if(Auth::user()->role_id > 2)
                        $lims_warehouse_list = DB::table('warehouses')->where([
                            ['is_active', true],
                            ['id', Auth::user()->warehouse_id]
                        ])->get();
                    else
                        $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                    $lims_account_list = \App\Account::where('is_active', true)->get();

                    ?>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Income Source *</label>
                            <select name="income_source_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select Income Source...">
                                @foreach($lims_income_source_list as $income_source)
                                    <option value="{{$income_source->id}}">{{$income_source->name . ' (' . $income_source->code. ')'}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--<div class="col-md-6 form-group">-->
                        <!--    <label>{{trans('file.Warehouse')}} *</label>-->
                        <!--    <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select Warehouse...">-->
                        <!--        @foreach($lims_warehouse_list as $warehouse)-->
                        <!--        <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>-->
                        <!--        @endforeach-->
                        <!--    </select>-->
                        <!--</div>-->
                        <div class="col-md-6 form-group">
                            <label>{{trans('Income Date')}} *</label>
                            <input type="text" name="income_date" required class="datepicker form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>{{trans('file.Amount')}} *</label>
                            <input type="number" name="amount" step="any" required class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label> {{trans('file.Account')}}</label>
                            <select class="form-control selectpicker" name="account_id">
                                @foreach($lims_account_list as $account)
                                    @if($account->is_default)
                                        <option selected value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                                    @else
                                        <option value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{trans('file.Note')}}</label>
                        <textarea name="note" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <!-- account modal -->
    <div id="account-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Add Account')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'accounts.store', 'method' => 'post']) !!}
                    <div class="form-group">
                        <label>{{trans('file.Account No')}} *</label>
                        <input type="text" name="account_no" placeholder="Enter Account No" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>{{trans('file.name')}} *</label>
                        <input type="text" name="name" placeholder="Enter Name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>{{trans('file.Initial Balance')}}</label>
                        <input type="number" name="initial_balance" placeholder="Enter Initial Balance" step="any" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>{{trans('file.Note')}}</label>
                        <textarea name="note" rows="3" placeholder="Enter Note" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <!-- account statement modal -->
    <div id="account-statement-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Account Statement')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'accounts.statement', 'method' => 'post']) !!}
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label> {{trans('file.Account')}}</label>
                            <select class="form-control selectpicker" name="account_id">
                                {{--@foreach($lims_account_list as $account)--}}
                                    {{--<option value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>--}}
                                {{--@endforeach--}}
                                    @foreach($lims_account_list as $account)
                                        @if($account->is_default)
                                            <option selected value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                                        @else
                                            <option value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label> {{trans('file.Type')}}</label>
                            <select class="form-control selectpicker" name="type">
                                <option value="0">{{trans('file.All')}}</option>
                                <option value="1">{{trans('file.Debit')}}</option>
                                <option value="2">{{trans('file.Credit')}}</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>{{trans('file.Choose Your Date')}}</label>
                            <div class="input-group">
                                <input type="text" class="daterangepicker-field form-control" required />
                                <input type="hidden" name="start_date" />
                                <input type="hidden" name="end_date" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <!-- warehouse modal -->
    <div id="warehouse-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Warehouse Report')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.warehouse', 'method' => 'post']) !!}
                    <?php
                    $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                    ?>
                    <div class="form-group">
                        <label>{{trans('file.Warehouse')}} *</label>
                        <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" id="warehouse-id" data-live-search-style="begins" title="Select warehouse...">
                            @foreach($lims_warehouse_list as $warehouse)
                                <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <!-- user modal -->
    <div id="user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.User Report')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.user', 'method' => 'post']) !!}
                    <?php
                    $lims_user_list = DB::table('users')->where('is_active', true)->get();
                    ?>
                    <div class="form-group">
                        <label>{{trans('file.User')}} *</label>
                        <select name="user_id" class="selectpicker form-control" required data-live-search="true" id="user-id" data-live-search-style="begins" title="Select user...">
                            @foreach($lims_user_list as $user)
                                <option value="{{$user->id}}">{{$user->name . ' (' . $user->phone. ')'}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <!-- customer modal -->
    <div id="customer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Customer Report')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.customer', 'method' => 'post']) !!}
                    <?php
                    $lims_customer_list = DB::table('customers')->where('is_active', true)->get();
                    ?>
                    <div class="form-group">
                        <label>{{trans('file.customer')}} *</label>
                        <select name="customer_id" class="selectpicker form-control" required data-live-search="true" id="customer-id" data-live-search-style="begins" title="Select customer...">
                            @foreach($lims_customer_list as $customer)
                                <option value="{{$customer->id}}">{{$customer->name . ' (' . $customer->phone_number. ')'}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <!-- supplier modal -->
    <div id="supplier-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Supplier Report')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.supplier', 'method' => 'post']) !!}
                    <?php
                    $lims_supplier_list = DB::table('suppliers')->where('is_active', true)->get();
                    ?>
                    <div class="form-group">
                        <label>{{trans('file.Supplier')}} *</label>
                        <select name="supplier_id" class="selectpicker form-control" required data-live-search="true" id="supplier-id" data-live-search-style="begins" title="Select Supplier...">
                            @foreach($lims_supplier_list as $supplier)
                                <option value="{{$supplier->id}}">{{$supplier->name . ' (' . $supplier->phone_number. ')'}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{trans('file.submit')}}</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <div style="display:none" id="content" class="animate-bottom">
        @yield('content')
    </div>

    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; {{$general_setting->site_title}} | {{trans('file.Developed')}} {{trans('file.By')}} <span class="external">{{$general_setting->developed_by}}</span></p>
                </div>
            </div>
        </div>
    </footer>
</div>
@yield('scripts')
<script>
    $( function() {
        $( ".datepicker" ).datepicker({
            dateFormat: 'dd - M - yy'
        });
    } );
</script>
<script>
    if ('serviceWorker' in navigator ) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/saleproposmajed/service-worker.js').then(function(registration) {
                // Registration was successful
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }
</script>
<script type="text/javascript">

    var alert_product = <?php echo json_encode($alert_product) ?>;

    if ($(window).outerWidth() > 1199) {
        $('nav.side-navbar').removeClass('shrink');
    }
    function myFunction() {
        setTimeout(showPage, 150);
    }
    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content").style.display = "block";
    }

    $("div.alert").delay(3000).slideUp(750);

    function confirmDelete() {
        if (confirm("Are you sure want to delete?")) {
            return true;
        }
        return false;
    }

    $("li#notification-icon").on("click", function (argument) {
        $.get('notifications/mark-as-read', function(data) {
            $("span.notification-number").text(alert_product);
        });
    });

    $("a#add-expense").click(function(e){
        e.preventDefault();
        $('#expense-modal').modal();
    });

    $("a#send-notification").click(function(e){
        e.preventDefault();
        $('#notification-modal').modal();
    });

    $("a#add-account").click(function(e){
        e.preventDefault();
        $('#account-modal').modal();
    });

    $("a#account-statement").click(function(e){
        e.preventDefault();
        $('#account-statement-modal').modal();
    });

    $("a#profitLoss-link").click(function(e){
        e.preventDefault();
        $("#profitLoss-report-form").submit();
    });

    $("a#report-link").click(function(e){
        e.preventDefault();
        $("#product-report-form").submit();
    });

    $("a#purchase-report-link").click(function(e){
        e.preventDefault();
        $("#purchase-report-form").submit();
    });

    $("a#sale-report-link").click(function(e){
        e.preventDefault();
        $("#sale-report-form").submit();
    });

    $("a#payment-report-link").click(function(e){
        e.preventDefault();
        $("#payment-report-form").submit();
    });

    $("a#warehouse-report-link").click(function(e){
        e.preventDefault();
        $('#warehouse-modal').modal();
    });

    $("a#user-report-link").click(function(e){
        e.preventDefault();
        $('#user-modal').modal();
    });

    $("a#customer-report-link").click(function(e){
        e.preventDefault();
        $('#customer-modal').modal();
    });

    $("a#supplier-report-link").click(function(e){
        e.preventDefault();
        $('#supplier-modal').modal();
    });

    $("a#due-report-link").click(function(e){
        e.preventDefault();
        $("#due-report-form").submit();
    });

    $(".daterangepicker-field").daterangepicker({
        callback: function(startDate, endDate, period){
            var start_date = startDate.format('YYYY-MM-DD');
            var end_date = endDate.format('YYYY-MM-DD');
            var title = start_date + ' To ' + end_date;
            $(this).val(title);
            $('#account-statement-modal input[name="start_date"]').val(start_date);
            $('#account-statement-modal input[name="end_date"]').val(end_date);
        }
    });

    $('.selectpicker').selectpicker({
        style: 'btn-link',
    });
</script>
</body>
</html>
