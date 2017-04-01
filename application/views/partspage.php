<!-- Parts page. Displays Contents -->

<div class="container-fluid">

    <h2>{pagetitle}</h2> 
    </br>

    <a href="/Parts/get_random_parts">
        <input type="button" class="btn btn-primary" value="Build More Parts"/>
    </a> 
    <a href="/Parts/buy_parts">
        <input type="button" class="btn btn-primary" value="Buy Parts"/>
    </a>   
    
     <a href="/Parts/get_parts_by_piece">
        <input type="button" class="btn btn-primary" value="Get piece head only"/>
    </a>      

    </br>
    </br>

    <div class="container-fluid span"> 
        <table class="table table-bordered">
            <tr>
                <th class="text-danger text-centered">HEAD</th>
                <th class="text-danger text-centered">TORSO</th>
                <th class="text-danger text-centered">LEGS</th>  
            </tr>
            <tr>

                <td>
                    {head_parts}
                    <a href="parts/{id}">
                        <img src="/assets/images/parts/{model}{piece}.jpeg" 
                             class="cell_part_image" class="img-responsive"/>
                        <p class="text-info text-centered">{model}{piece}</p>
                    </a>
                    {/head_parts}
                </td>  


                <td> {torso_parts}
                    <a href="parts/{id}">
                        <img src="/assets/images/parts/{model}{piece}.jpeg" 
                             class="cell_part_image" class="img-responsive"/>
                        <p class="text-info text-centered">{model}{piece}</p>
                    </a>
                    {/torso_parts}
                </td>


                <td>
                    {legs_parts}
                    <a href="parts/{id}">
                        <img src="/assets/images/parts/{model}{piece}.jpeg" 
                             class="cell_part_image" class="img-responsive"/>
                        <p class="text-info text-centered">{model}{piece}</p>
                    </a>
                    {/legs_parts} 
                </td>

            </tr>
        </table>

    </div>

</div>

