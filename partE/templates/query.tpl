{extends 'base.tpl'}
{block "main"}

<script type="text/javascript">
  $(document).ready(function(){

     $("#view").click(function(event){
        event.preventDefault(); 
        $('#review_session').show(); 
        $.ajax({
           url: "review_session.php", 
           success: function(data){
             $('#review_session').hide().html(data).fadeIn(500); 
           }
        }); 
     }); 

  });
</script>



<a href="search.php">Back to search.php</a>
<br/><br/>

{if isset($session) }
   <div class="alert alert-success">
       session is started
   </div>

   <a href="end_session.php">End session</a>
   <br/><br/>

   <a id="view" href="review_session.php">View session query</a>
{/if}

<br/><br/>

<div id="review_session" class="hide">
  <img src="static/image/ajax-loader.gif">
</div>

<br/><br/>

<strong> Normal result </strong>

<br/><br/>
Share results: 
<a href="https://twitter.com/share" class="twitter-share-button" 
data-text="{$share}" data-via="tang_z_2012">Tweet</a>

{literal}
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
{/literal}

<br/><br/>

{if $wines}

<table class="table table-striped table-condensed">
  <thead>
    <tr>
      <th>Wine Name</th>
      <th>Grape Varieties</th>
      <th>Year</th>
      <th>Winery</th>
      <th>Region</th>
      <th>Cost</th>
      <th>Total number of bottles available</th>
      <th>Total Stock sold</th>
      <th>Sales Revenue</th>
    </tr>
  </thead>

  <tbody>

{foreach $wines as $wine}
 <tr>
   <td>{$wine.wine_name}</td>
   <td>{$wine.variety}</td>
   <td>{$wine.year}</td>
   <td>{$wine.winery_name}</td>
   <td>{$wine.region_name}</td>
   <td>{$wine.cost}</td>
   <td>{$wine.on_hand}</td>
   <td>{$wine.$sum_qty}</td>
   <td>{$wine.$sum_price}</td>
 </tr>
{/foreach}

  </tbody>
</table>

{else}

<div class="alert alert-block">
No records match your search criteria
</div>

{/if}

{/block}
