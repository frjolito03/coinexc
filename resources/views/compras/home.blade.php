@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-8">
            <div>
                <p class="bg-primary">Currently, when you buy a token  you get a 70% bonus</p>      
            </div>

            <div class="col-md-12">
                <h1>Puchase Tokens</h1>
                <p>1ETH = 5GDN</p>
                <p>No minimun Puchase</p>
                  
      


            </div>

            <div style="    padding-top: 4%;" class="container col-md-12">
                  
<div class="col-md-6">
                  <h6>YOUR BUYING AMOUNT</h6>
                  <div class="form-group  has-feedback">
                      <label class="control-label" for="inputSuccess2"></label>
                      <input type="number" min="0" value="1" class="form-control" id="numero" aria-describedby="inputSuccess2Status">
                      <span class=" form-control-feedback" aria-hidden="true"> <strong>ETH</strong></span>
                      <span id="inputSuccess2Status" class="sr-only"></span>
                  </div>

              </div>


                   <div class="container col-md-6" style="text-align: right;">
         
           <table id="table1" class="table borderless">
             <tr>
                 <td style="border-top: none;" colspan="2">GDN CONVERTED AMOUNT</td> 
             </tr>
              <tr>
                 <td style="border-top: none;" ><span id="calculo">GDN</span></td> 
                 <td style="border-top: none;" >GDN</td> 
             </tr>
         </table>


         <table id="table2" class="table borderless" style="">
             <tr>
                 <td style="border-top: none;" colspan="2"><p style="color: red;">70% BONUS</p>(PRE-ICO STAGE)

                 </td> 
             </tr>
              <tr>
                 <td style="border-top: none;" > <span id="bonus"></span></td> 
                 <td style="border-top: none;" >GDN</td> 
             </tr>
         </table>
     </div>
                
  
          </div> 

       
            
       

  </div>
                               
      </div>

</div>
 <script type="text/javascript">
     $( document ).ready(function() {
          var eth=5;
    var num =$( "#numero" ).val(); 
    var total= num*5; 
    var mostrar= parseFloat(total).toFixed(2);
   $( "#calculo" ).text(mostrar);
var bonus=num*0.7;
var bonustotal=parseFloat(bonus).toFixed(2);
$( "#bonus" ).text(bonustotal);
   
$( "#numero" ).keyup(function() {
  
 var num =$( "#numero" ).val(); 
var total= num*5;
var mostrar= parseFloat(total).toFixed(2);
var bonus=num*0.7;
var bonustotal=parseFloat(bonus).toFixed(2);


 $( "#calculo" ).text(mostrar);
$( "#bonus" ).text(bonustotal);


});
$( "#numero" ).change(function() {
  
 var num =$( "#numero" ).val(); 
var total= num*5;
var bonus=num*0.7;
var bonustotal=parseFloat(bonus).toFixed(2);
var mostrar= parseFloat(total).toFixed(2);
 $( "#calculo" ).text(mostrar);
$( "#bonus" ).text(bonustotal);


});





});



 </script>


@endsection
