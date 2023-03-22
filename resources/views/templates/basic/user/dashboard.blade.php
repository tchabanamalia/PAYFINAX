@extends($activeTemplate.'layouts.master')
@section('content')

<!-- dashboard section start -->
    <div class="container">

        <div class="row justify-content-center gy-4">
            <div class="col-lg-6">
                <div class="card-widget section--bg2 text-center bg_img" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                    <span class="caption text-white mb-3">@lang('Account Number')</span>
                    <h3 class="d-number text-white">{{ $user->account_number }}</h3>
                </div><!-- d-widget end -->
            </div>

            <div class="col-lg-6">
                <div class="card-widget section--bg2 text-center bg_img" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                    <span class="caption text-white mb-3">@lang('Available Balance')</span>
                    <h3 class="d-number text-white">{{ $general->cur_sym }}{{ showAmount($user->balance) }}</h3>
                </div><!-- d-widget end -->
            </div>

        </div><!-- row end -->

        <div class="row justify-content-center gy-4 mt-4">
            @if($general->modules->deposit)
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('user.deposit.history') }}" class="w-100 h-100">
                    <div class="d-widget section--bg2 d-flex flex-wrap align-items-center rounded-3 bg_img h-100" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                        <div class="d-widget__content">
                        <h3 class="d-number text-white">{{ $general->cur_sym }}{{ showAmount(@$widget['total_deposit']) }}</h3>
                        <span class="caption text-white">@lang('Deposits')</span>
                        </div>
                        <div class="d-widget__icon border-radius--100">
                            <i class="las la-wallet"></i>
                        </div>
                    </div><!-- d-widget end -->
                </a>
            </div>
            @endif

            @if($general->modules->withdraw)
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('user.withdraw.history') }}" class="w-100 h-100">
                    <div class="d-widget section--bg2 d-flex flex-wrap align-items-center rounded-3 bg_img h-100" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                        <div class="d-widget__content">
                            <h3 class="d-number text-white">{{ $general->cur_sym }}{{ showAmount(@$widget['total_withdraw']) }}</h3>
                            <span class="caption text-white">@lang('Withdrawals')</span>
                        </div>
                        <div class="d-widget__icon border-radius--100">
                        <i class="las la-money-check"></i>
                        </div>
                    </div><!-- d-widget end -->
                </a>
            </div>
            @endif

            <div class="col-lg-4 col-md-6">
                <a href="{{ route('user.transaction.history') }}" class="w-100 h-100">
                    <div class="d-widget section--bg2 d-flex flex-wrap align-items-center rounded-3 bg_img h-100" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                        <div class="d-widget__content">
                            <h3 class="d-number text-white">{{ @$widget['total_trx'] }}</h3>
                            <span class="caption text-white">@lang('Transactions')</span>
                        </div>
                        <div class="d-widget__icon border-radius--100">
                        <i class="las la-exchange-alt"></i>
                        </div>
                    </div><!-- d-widget end -->
                </a>
            </div>

            @if($general->modules->fdr)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('user.fdr.list') }}" class="w-100 h-100">
                        <div class="d-widget section--bg2 d-flex flex-wrap align-items-center rounded-3 bg_img h-100" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                            <div class="d-widget__content">
                                <h3 class="d-number text-white">{{ @$widget['total_fdr'] }}</h3>
                            <span class="caption text-white">@lang('FDR')</span>
                            </div>
                            <div class="d-widget__icon border-radius--100">
                            <i class="las la-money-bill"></i>
                            </div>
                        </div><!-- d-widget end -->
                    </a>
                </div>
            @endif



            @if($general->modules->dps)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('user.dps.list') }}" class="w-100 h-100">
                        <div class="d-widget section--bg2 d-flex flex-wrap align-items-center rounded-3 bg_img h-100" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                            <div class="d-widget__content">
                                <h3 class="d-number text-white">{{ @$widget['total_dps'] }}</h3>
                            <span class="caption text-white">@lang('DPS')</span>
                            </div>
                            <div class="d-widget__icon border-radius--100">
                                <i class="las la-box-open"></i>
                            </div>
                        </div><!-- d-widget end -->
                    </a>
                </div>
            @endif


            @if($general->modules->loan)
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('user.loan.list') }}" class="w-100 h-100">
                    <div class="d-widget section--bg2 d-flex flex-wrap align-items-center rounded-3 bg_img h-100" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                        <div class="d-widget__content">
                            <h3 class="d-number text-white">{{ @$widget['total_loan'] }}</h3>
                        <span class="caption text-white">@lang('Loan')</span>
                        </div>
                        <div class="d-widget__icon border-radius--100">
                        <i class="las la-hand-holding-usd"></i>
                        </div>
                    </div><!-- d-widget end -->
                </a>
            </div>
            @endif
        </div><!-- row end -->

        @if($general->modules->referral_system)
        <div class="col-12 mt-5">
            <div class="d-widget section--bg2 d-flex flex-wrap align-items-center rounded-3 bg_img h-100" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/card-bg.png') }} ');">
                <label for="lastname" class="col-form-label text-white">@lang('My Referral Link'):</label>
                <div class="input-group">
                    <input type="url" id="ref" value="{{ route('home').'?reference='.auth()->user()->username }}" class="form-control form-control-lg bg-transparent text-white" readonly>
                    <button  type="button"  data-copytarget="#ref" class="input-group-text bg--base text-white copybtn border-0"><i class="fa fa-copy"></i> &nbsp; @lang('Copy')</button>
                </div>
            </div>
        </div>
        @endif

        <div class="row gy-4 mt-5">
            <div class="col-lg-6">
                <h4 class="mb-3">@lang('Latest Credits')</h3>
                <div class="custom--card">
                    <div class="card-body p-0">
                        <div class="table-responsive--md">
                            <table class="table custom--table mb-0">
                                <thead>
                                    <tr>
                                        <th>@lang('Date')</th>
                                        <th>@lang('Trx')</th>
                                        <th>@lang('Amount')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($credits as $data)
                                        <tr>
                                            <td data-label="Date">
                                                {{ showDateTime($data->created_at, 'd M, Y h:i A') }}
                                            </td>

                                            <td data-label="Trx">
                                                {{ $data->trx }}
                                            </td>

                                            <td data-label="Amount" class="fw-bold">
                                                {{ showAmount($data->amount) }}
                                                {{ __($general->cur_text) }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%" class="text-center">{{ 'No credits yet' }}</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h4 class="mb-3">@lang('Latest Debits')</h3>
                <div class="custom--card">
                    <div class="card-body p-0">
                        <div class="table-responsive--md">
                            <table class="table custom--table mb-0">
                                <thead>
                                    <tr>
                                        <th>@lang('Date')</th>
                                        <th>@lang('Trx')</th>
                                        <th>@lang('Amount')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($debits as $data)
                                        <tr>
                                            <td data-label="Date">
                                                {{ showDateTime($data->created_at, 'd M, Y h:i A') }}
                                            </td>
                                            <td data-label="Trx">
                                                {{ $data->trx }}
                                            </td>
                                            <td data-label="Amount" class="fw-bold">
                                                {{ showAmount($data->amount) }}
                                                {{ __($general->cur_text) }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%" class="text-center">{{ 'No credits yet' }}</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- dashboard section end -->

@endsection



@if($general->modules->referral_system)
    @push('script')
        <script>
            'use strict';
            document.querySelectorAll('.copybtn').forEach((element)=>{
                element.addEventListener('click', copy, true);
            })

            function copy(e) {
                var
                    t = e.target,
                    c = t.dataset.copytarget,
                    inp = (c ? document.querySelector(c) : null);
                if (inp && inp.select) {
                    inp.select();
                    try {
                        document.execCommand('copy');
                        inp.blur();
                        t.classList.add('copied');
                        setTimeout(function() { t.classList.remove('copied'); }, 1500);
                    }catch (err) {
                        alert(`@lang('Please press Ctrl/Cmd+C to copy')`);
                    }
                }
            }
        </script>
    @endpush


    @push('style')
        <style>
            .copyInput {
                display: inline-block;
                line-height: 50px;
                position: absolute;
                top: 0;
                right: 0;
                width: 40px;
                text-align: center;
                font-size: 14px;
                cursor: pointer;
                -webkit-transition: all .3s;
                -o-transition: all .3s;
                transition: all .3s;
            }

            .copied::after {
                position: absolute;
                top: 10px;
                right: 12%;
                width: 100px;
                display: block;
                content: "COPIED";
                font-size: 1em;
                padding: 5px 5px;
                color: #fff;
                background-color: #{{ $general->base_color }};
                border-radius: 3px;
                opacity: 0;
                will-change: opacity, transform;
                animation: showcopied 1.5s ease;
            }

            @keyframes showcopied {
                0% {
                    opacity: 0;
                    transform: translateX(100%);
                }
                50% {
                    opacity: 0.7;
                    transform: translateX(40%);
                }
                70% {
                    opacity: 1;
                    transform: translateX(0);
                }
                100% {
                    opacity: 0;
                }
            }

        </style>
    @endpush
@endif
