{extends 'base.tpl'}
{block "main"}

<table class="table table-striped table-condensed">
  <thead>
    <tr>
      <th>Wine Name</th>
      <th>Grape varieties</th>
      <th>Year</th>
      <th>Winery</th>
      <th>Region</th>
      <th>Cost</th>
      <th>qty sold</th>
      <th>sales</th>
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
   <td>{$wine.$sum_price}</td>
 </tr>
{/foreach}

  </tbody>
</table>

{/block}
