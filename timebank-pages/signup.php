<div id="sign-up">
    <fieldset style="width:80%">
        <legend>Registration Form</legend> 
        <form method="POST" action="../timebank-php/signupCheck.php" onsubmit="return checkrequired(this)"> 
            <table border="0">
                <tr> 
                    <td>Username</td>
                    <td> 
                        <input type="text" name="requiredUsername" id="username">
                    </td>
                </tr>
                <tr> 
                    <td>Password</td>
                    <td> 
                        <input type="password" name="requiredPassword" id="password">
                    </td> 
                </tr> 
                <tr> 
                    <td>Confirm Password </td>
                    <td>
                        <input type="password" name="requiredCpassword" id="cpassword">
                    </td> 
                </tr> 
                <tr>
                    <td>Full Name</td>
                    <td> 
                        <input type="text" name="requiredName" id="name">
                    </td> 
                </tr>
                <tr>
                    <td>Address Line 1</td>
                    <td> 
                        <input type="text" name="requiredAdd1" id="add1">
                    </td> 
                </tr>
                <tr>
                    <td>Address Line 2</td>
                    <td> 
                        <input type="text" name="add2" id="add2">
                    </td> 
                </tr>
                <tr>
                    <td>Address Line 3</td>
                    <td> 
                        <input type="text" name="add3" id="add3">
                    </td> 
                </tr>
                <tr>
                    <td>Town</td>
                    <td> 
                        <input type="text" name="requiredTown" id="town">
                    </td> 
                </tr>
                <tr>
                    <td>County</td>
                    <td> 
                        <input type="text" name="requiredCounty" id="county">
                    </td> 
                </tr>
                <tr>
                    <td>Postcode</td>
                    <td> 
                        <input type="text" name="requiredPostcode" id="postcode">
                    </td> 
                </tr>
                <tr> 
                    <td>Phone Number</td>
                    <td> 
                        <input type="text" name="requiredPhone" id="phone">
                    </td> 
                </tr> 
                <tr> 
                    <td>Email</td>
                    <td> 
                        <input type="text" name="requiredEmail" id="email">
                    </td> 
                </tr>
                <tr> 
                    <td>Confirm Email</td>
                    <td> 
                        <input type="text" name="requiredCemail" id="cemail">
                    </td> 
                </tr>
                <tr> 
                    <td>Preferred Contact Method</td>
                    <td> 
                        <select name="requiredPreferredContact" id="preferredContact">
                            <option value="unselected">Please Choose</option>
                            <option value="post">Post</option>
                            <option value="email">Email</option>
                            <option value="phone">Phone</option>
                        </select>
                    </td> 
                </tr>
                <tr> 
                    <td>
                        <input id="button" type="submit" name="submit" value="Sign-Up">
                    </td> 
                </tr> 
            </table>
        </form>  
    </fieldset>
</div>