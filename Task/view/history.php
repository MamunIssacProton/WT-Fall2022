<?php
include('../controller/history.php');
?>

<body>
    <h3>History</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                   <select name="category">
                    <option value=''>Select a Category</option>
                    <option value="transaction">Transaction (Send Money)</option>
                    <option value='bill'>Bill Payment</option>
                    <option value='gasBill'>Gas Bill Payment</option>
                    <option value='loan'>Loan</option>  
                </select>
                </td>
                <td>
                    <input type="submit" name='submit'/>
                </td>
            </tr>
        </table>
        
    </form>
</body>
