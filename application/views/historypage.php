<!-- History page. Displays Contents -->

<div class="container-fluid">
    <h2>{pagetitle}</h2>

    {pagination}
    
<ul class="nav nav-pills">
        <li><b>Sort</b></li>
        <li><a href="/History/page/1/modelDesc">By Model - Desc</a></li>
        <li><a href="/History/page/1/modelAsc">By Model - Asc</a></li>
        <li><a href="/History/page/1/dateDesc">By Model - Asc</a></li>
        <li><a href="/History/page/1/dateAsc">By Model - Asc</a></li>
</ul><br/>    
    <table class="table table-bordered sortable">
        <tr>
            <th>Transaction</th>
            <th>Action</th>
            <th>Sequence</th>
            <th>Amount</th>         
            <th>Plant</th>            
            <th>Date/Time</th>
        </tr>
        
        {transaction}
        <tr>
        <td>{id}</td>
        <td>{action}</td>        
        <td>{seq}</td>
        <td>{amount}</td>
        <td>{plant}</td>        
        <td>{stamp}</td>
        </tr>
        {/transaction}
    </table>

</div>