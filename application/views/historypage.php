<!-- History page. Displays Contents -->

<div class="container-fluid">
    <h2>History</h2>

    <table class="table table-bordered">
        <tr>
            <th>Model</th>
            <th>Transaction</th>
            <th>Price</th>
            <th>Date</th>
            <th>Time</th>    
        </tr>
        {transaction}
        <tr>
            <td>{model}</td>
            <td>{transaction}</td>
            <td>{price}</td>
            <td>{date}</td>
            <td>{time}</td>
        </tr>
        {/transaction}
    </table>

</div>