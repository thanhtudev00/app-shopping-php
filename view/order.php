<!-- Breadcrumb area Start -->
     <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                         <h1 class="page-title">Tracking Order</h1>
                         <ul class="breadcrumb">
                             <li><a href="index.html">Home</a></li>
                             <li class="current"><span>Tracking Order</span></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Breadcrumb area End -->


     <!-- Main Content Wrapper Start -->
     <div class="main-content-wrapper">
         <div class="page-content-inner pt--75 pb--80">
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-lg-6">
                         <p class="heading-color mb--30 text-center">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received. Your Order ID: </p>
                         <form class="form form--track" action="index.php?act=tracking" method="post">
                             <div class="form__group mb--30">
                                 <label for="order_id" class="form__label form__label--2">Order ID</label>
                                 <input type="text" name="orderid" class="form__input form__input--2" placeholder="Found in your order confirmation email.">
                             </div>
                             <div class="form__group text-center">
                                 <input type="submit" name="smit" value="Track Order" class="btn-submit">
                             </div>
                         </form>

                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Main Content Wrapper Start -->