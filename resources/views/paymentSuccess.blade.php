
@extends('layouts.master')

@section('title')
<title>Auth</title>
@endsection

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
            <h1>Subscription Payment Checkout</h1>

            <div class="alert alert-success">
              <p class="h1">Thank you for your payment! Your
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

        </div>
    </section>
  </main>

 @endsection
