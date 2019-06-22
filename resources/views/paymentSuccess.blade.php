
@extends('layouts.master')

@section('title', 'Card Payment - ')

@section('script')
  <style>
  /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
  </style>
@endsection

@section('content')
  <main>
    <section class="section-auth">
        <div class="container">
            <h1 style="font-size: 18px;color: #2db684;text-align: center;">Subscription Payment Checkout</h1>

            <div class="alert alert-success">
              <p class="h1" style="margin: 0;text-align: center;font-size: 18px;">Thank you for your payment! Your
                <strong class="text-info">
                @switch(auth()->user()->payment)
                  @case(1)
                    Basic
                    @break
                  @case(2)
                    Standard
                    @break
                  @default
                    Premium
                @endswitch
                </strong>
                plan is now activated.
              </p>
            </div>
            <h1 style="text-align: center;font-size: 18px;">Go back to <a href="{{ url('/dashboard') }}" style="color: #2db684;text-decoration: underline;">Dashboard </a> page</h1>

        </div>
    </section>
  </main>

 @endsection
