{extends 'base.tpl'}
{block "main"}

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
      <th>Qty</th>
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
   <td>{$wine.$sum_qty}</td>
   <td>{$wine.$sum_price-$wine.$sum_qty*$wine.cost}</td>
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
