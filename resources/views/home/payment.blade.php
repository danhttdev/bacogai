@include('layouts.layoutMain')

<link rel="stylesheet" type="text/css" href="{{ asset('style.css')}}">
<!--Course Area Start-->
<!--Contact Form Area Start-->
<div class="card__container" style="text-align:center; margin-bottom:200px;">
      <div class="card" style="margin: 0 auto;">
          <div class="row paypal">
              <div class="left">
                  <input id="pp" type="radio" name="payment" />
                  <div class="radio"></div>
                  <label for="pp">Paypal</label>
              </div>
              <div class="right">
                  <img src="http://i68.tinypic.com/2rwoj6s.png" alt="paypal" />
              </div>
          </div>
          <div class="row credit">
              <div class="left">
                  <input id="cd" type="radio" name="payment" />
                  <div class="radio"></div>
                  <label for="cd">Debit/ Credit Card</label>
              </div>
              <div class="right">
                  <img src="http://i66.tinypic.com/5knfq8.png" alt="visa" />
                  <img src="http://i67.tinypic.com/14y4p1.png" alt="mastercard" />
                  <img src="http://i63.tinypic.com/1572ot1.png" alt="amex" />
                  <img src="http://i64.tinypic.com/2i92k4p.png" alt="maestro" />
              </div>
          </div>
          <div class="row cardholder">
              <div class="info">
                  <label for="cardholdername">Seri number</label>
                  <input placeholder="097 517 532 ..." id="cardholdername" type="text" />
              </div>
          </div>
          <div class="row number">
              <div class="info">
                  <label for="cardnumber">Card number</label>
                  <input id="cardnumber" type="text" pattern="[0-9]{16,19}" maxlength="19" placeholder="8888-8888-8888-8888"/>
              </div>
          </div>
          <div class="button" style="margin-left: -30px;  margin-bottom: 50px;">
               <button   style="margin: 0 auto; font-size:25px;" type="submit">Confirm and Pay</button>
           </div>
      </div>
     
  </div>


@include('layouts.layoutMainFooter')
