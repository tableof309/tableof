<div class="row">
	<div class="col-md-12 text-center">
	    <h2> Online Multiplication <span style="color: #f5b803;">Table {{ (isset($tableof_str) && $tableof_str !=='') ? (' Of  '.$tableof_str) : 'Think A Number' }}</span> </h2>
	    <p>with Exmaples, Download tables graph, play math quiz and compose tables, test (test) and numerous more...</p>

	    <div class="search-bar">
	        <img src="{{asset('images/delete-txt.png')}}" class="remove-text" alt="table of search box"/>
	        <input type="number" name="keyword" placeholder="Table of.." id="getvalue" autocomplete="off">

	        <button type="submit" id="get_table"> Search Table </button>
	        <div class="show-table">
	            <table class="table-data table-bordered table-responsive">
	                <thead>
	                <tr style="visibility: collapse;">
	                	<th> </th>
	                	<th> </th>
	                	<th> </th>
	                </tr>
	                <tr>
						<th colspan="3"> <span> </span> Table </th>
	                </tr>
	                </thead>
	                <tbody>

	                </tbody>


	            </table>

	        </div>
	    </div>
	</div>
</div>