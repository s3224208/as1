{extends 'base.tpl'}

{block 'main'}

   {if isset($err_msg)}   
     <div class="alert alert-error">
        {$err_msg}
     </div>
   {/if}
	 <form action="query.php" method="GET" >
	 
     Wine name:
     <input type="text" name="wine" id="wine" /><br/>

     Winery name:
     <input type="text" name="winery" id="winery" /><br/>

     Region:
     <select name="region" id="region" >
          {foreach $regions as $region}
             <option value='{$region.region_name}'>{$region.region_name}</option>";
          {/foreach}
     </select><br/>

     Grape type:
     <select name="grape" id="grape" >
          {foreach $grapes as $grape}
             <option value='{$grape.variety}'>{$grape.variety}</option>";
          {/foreach}
     </select><br/>

     Range of years:
     from:
     <select name="from_y" id="from_y" >
          {foreach $years as $year}
             <option value='{$year}'>{$year}</option>";
          {/foreach}
     </select>
     to:	 
     <select name="to_y" id="to_y" >
          {foreach $years as $year}
             <option value='{$year}'>{$year}</option>";
          {/foreach}
     </select><br/>

     Minimun number of wines in stock
	 <input type="text" name="stock" id="stock" /><br/>
	 
	 Minimum number of wines ordered
	 <input type="text" name="order" id="order" /><br/>
	 
	 Dollar cost range
	 From: 
         <input type="text" name="from" id="from" />
         To:
         <input type="text" name="to" id="to" /></br>
	 
	 <input type="submit" id="submit" class="btn btn-primary" />
	 
	 </form>
{/block}
