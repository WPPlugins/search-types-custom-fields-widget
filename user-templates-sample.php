<!-- These sample templates are for the Backbone with Bootstrap mode.                                                               -->
<!-- The template format is different for Backbone without Bootstrap mode and Backbone with Bootstrap mode.                         -->
<!-- See the file user-templates-no-bootstrap-sample.php for sample templates for Backbone without Bootstrap mode.                  -->
<!-- Your template file should be named "user-templates.php" and be in this plugin's main folder.                                   -->
<!-- You can style your templates by creating a file "css/user-styles.css"                                                          -->
<!-- Beware the only fields that are available for use in templates are those enabled for display in the search widget.             -->
<!-- This is the "user-templates.php" file of "http://magentacuda.com/demo-of-search-widget-and-wp-rest-server-for-toolset-types/". -->

<!-- Bootstrap Table Backbone Container Template -->
<script type="text/html" id="st_iv-bs-template_table-lake">
<div class="table st_iv-table-base st_iv-table-lake">
<table class="st_iv-table-base tablesorter st_iv-table-lake">
  <thead>
    <tr>
      <th>Lake</th>
      <th>Country</th>
      <th>Area</th>
      <th>Depth</th>
      <th>Type</th>
      <th>Trophic</th>
      <th>Endorheic</th>
      <th>Zone</th>
      <th>Fishes</th>
    </tr>
  </thead>
  <tbody>
    {{{ data.items }}}
  </tbody>
</table>
<div class="st_iv-table-footer st_iv-table-footer-lake">
You can sort by a column by clicking on the column header.
You can do a multi-column sort by pressing the shift key on subsequent columns.
</div>
</div>
</script>

<!-- Bootstrap Table Backbone Item Template -->
<script type="text/html" id="st_iv-bs-template_table_item-lake">
    <tr>
      <td><a href="<# print(stcfw.extractHrefAndLabelFromLink(data.post_title).href); #>" target="_blank"><# print(stcfw.extractHrefAndLabelFromLink(data.post_title).label); #></a></td>
      <!-- the expression below is equivalent to <td>{{{ data.country_id_of }}}</td> but is provided as an example of parsing fields with link value -->
      <td><a href="<# print(stcfw.extractHrefAndLabelFromLink(data.country_id_of).href); #>" target="_blank"><# print(stcfw.extractHrefAndLabelFromLink(data.country_id_of).label); #></a></td>
      <td class="st_iv-table-cell-right-align">{{{ data.area }}}</td>
      <td class="st_iv-table-cell-right-align">{{{ data.depth }}}</td>
      <td>{{{ data["lake-type"] }}}</td>
      <td>{{{ data.trophic }}}</td>
      <td>{{{ data.endorheic }}}</td>
      <td>{{{ data.zone }}}</td>
      <td>{{{ data.fish }}}</td>
    </tr>
</script>

<!-- Bootstrap Table Backbone Container Template -->
<script type="text/html" id="st_iv-bs-template_table-mountain">
<div class="table st_iv-table-base st_iv-table-mountain">
<table class="st_iv-table-base tablesorter st_iv-table-mountain">
  <thead>
    <tr>
      <th>Mountain</th>
      <th>Country</th>
      <th>Continent</th>
      <th>Height</th>
      <th>Type</th>
      <th>Rock Type</th>
      <th>Zone</th>
      <th>Nearest City</th>
    </tr>
  </thead>
  <tbody>
    {{{ data.items }}}
  </tbody>
</table>
<div class="st_iv-table-footer st_iv-table-footer-mountain">
You can sort by a column by clicking on the column header.
You can do a multi-column sort by pressing the shift key on subsequent columns.
</div>
</div>
</script>

<!-- Bootstrap Table Backbone Item Template -->
<script type="text/html" id="st_iv-bs-template_table_item-mountain">
    <tr>
      <td><a href="<# print(stcfw.extractHrefAndLabelFromLink(data.post_title).href); #>" target="_blank"><# print(stcfw.extractHrefAndLabelFromLink(data.post_title).label); #></a></td>
      <td>{{{ data.country_id_of }}}</td>
      <td>{{{ data.continent }}}</td>
      <td class="st_iv-table-cell-right-align">{{{ data.height }}}</td>
      <td>{{{ data["mountain-type"] }}}</td>
      <td>{{{ data["rock-type"] }}}</td>
      <td>{{{ data.zone }}}</td>
      <td>{{{ data["nearest-city"] }}}</td>
    </tr>
</script>

<!-- Bootstrap Table Backbone Container Template -->
<script type="text/html" id="st_iv-bs-template_table-country">
<div class="table st_iv-table-base st_iv-table-country">
<table class="st_iv-table-base st_iv-table-country">
  <thead>
    <tr>
      <th>Country</th>
      <th>Mountains</th>
      <th>Lakes</th>
    </tr>
  </thead>
  <tbody>
    {{{ data.items }}}
  </tbody>
</table>
</div>
</script>

<!-- Bootstrap Table Backbone Item Template -->
<script type="text/html" id="st_iv-bs-template_table_item-country">
    <tr>
      <td><a href="<# print(stcfw.extractHrefAndLabelFromLink(data.post_title).href); #>" target="_blank"><# print(stcfw.extractHrefAndLabelFromLink(data.post_title).label); #></a></td>
      <td>
      <!-- the expression below is equivalent to <td>{{{ data.mountain_id_for }}}</td> but is provided as an example of parsing fields with multiple links -->
      <# stcfw.extractHrefAndLabelFromLinks(data.mountain_id_for).forEach(function(link,i){
          print((i?", ":"")+'<a href="'+link.href+'" target="_blank">'+link.label+'</a>');
      }); #>
      </td>
      <td>{{{ data.lake_id_for }}}</td>
    </tr>
</script>
