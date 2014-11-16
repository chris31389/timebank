<div id="equality">
    <fieldset style="width:80%">
        <legend>Wellness Survey</legend> 
        <form method="POST" action="../timebank-php/wellbeingCheck.php" onsubmit="return checkrequired(this)"> 
            <table border="0">
                <tr>
                    <td colspan="1" width="25%">I consent to take part in the study</td>
                    <td colspan="1" width="25%">
                        <select name="requiredConsent" id="requiredConsent">
                            <option value="">Please Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" width="25%">I understand the information will be kept confidentially</td>
                    <td colspan="1" width="25%">
                        <select name="requiredUnderstandinfo" id="requiredUnderstandinfo">
                            <option value="">Please Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="50%"><h4>Your well-being, friendships, support and community</h4></td>
                </tr>
                <tr>
                    <td>I have been feeling interested in other people</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ1" id="requiredQ1">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>I have been stepping back and noticing the world around me</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ2" id="requiredQ2">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>I have been taking some physical exercise</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ3" id="requiredQ3">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>I have been involved in learning something new</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ4" id="requiredQ4">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>I have been feeling loved</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ5" id="requiredQ5">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>I have been reflecting upon recent positive experiences</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ6" id="requiredQ6">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>I have done a good deed for someone</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ7" id="requireQ7">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>I have tried to get to know someone better</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ8" id="requiredQ8">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>I have volunteered my time to help someone else or towards a cause</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ9" id="requiredQ9">
                            <option value="">Please Select</option>
                            <option value="1">None of the time</option>
                            <option value="2">Rarely</option>
                            <option value="3">Some of the time</option>
                            <option value="4">Often</option>
                            <option value="5">All of the time</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>How many friends do you see or hear from in a month?</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ10" id="requiredQ10">
                            <option value="">Please Select</option>
                            <option value="1">0</option>
                            <option value="2">1-3</option>
                            <option value="3">4-6</option>
                            <option value="4">7-9</option>
                            <option value="5">10+</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="50%"><h4>Below is a list of statements, please state whether you are getting any of the following:</h4></td>
                </tr>
                <tr>
                    <td>Opportunities to give (e.g. helping others)</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ11" id="requiredQ11">
                            <option value="">Please Select</option>
                            <option value="1">I get some</option>
                            <option value="2">I get this a lot</option>
                            <option value="3">I often get this</option>
                            <option value="4">I'm not getting this</option>
                            <option value="5">I don't want this</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Practical support (e.g. DIY, shopping, gardening, transport)</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ12" id="requiredQ12">
                            <option value="">Please Select</option>
                            <option value="1">I get some</option>
                            <option value="2">I get this a lot</option>
                            <option value="3">I often get this</option>
                            <option value="4">I'm not getting this</option>
                            <option value="5">I don't want this</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Emotional support (e.g. someone to talk to)</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ13" id="requiredQ13">
                            <option value="">Please Select</option>
                            <option value="1">I get some</option>
                            <option value="2">I get this a lot</option>
                            <option value="3">I often get this</option>
                            <option value="4">I'm not getting this</option>
                            <option value="5">I don't want this</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Feeling part of a community</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ14" id="requiredQ14">
                            <option value="">Please Select</option>
                            <option value="1">I get some</option>
                            <option value="2">I get this a lot</option>
                            <option value="3">I often get this</option>
                            <option value="4">I'm not getting this</option>
                            <option value="5">I don't want this</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="50%"><h4>Please rate whether you want the following:</h4></td>
                </tr>
                <tr>
                    <td>Opportunities to give (e.g. helping others)</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ15" id="requiredQ15">
                            <option value="">Please Select</option>
                            <option value="1">I may want this</option>
                            <option value="2">I often want this</option>
                            <option value="3">I really want this</option>
                            <option value="4">I don't want this</option>
                            <option value="5">Not sure</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Practical support (e.g. DIY, shopping, gardening, transport)</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ16" id="requiredQ16">
                            <option value="">Please Select</option>
                            <option value="1">I may want this</option>
                            <option value="2">I often want this</option>
                            <option value="3">I really want this</option>
                            <option value="4">I don't want this</option>
                            <option value="5">Not sure</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Emotional support (e.g. someone to talk to)</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ17" id="requiredQ17">
                            <option value="">Please Select</option>
                            <option value="1">I may want this</option>
                            <option value="2">I often want this</option>
                            <option value="3">I really want this</option>
                            <option value="4">I don't want this</option>
                            <option value="5">Not sure</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Feeling part of a community</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ18" id="requiredQ18">
                            <option value="">Please Select</option>
                            <option value="1">I may want this</option>
                            <option value="2">I often want this</option>
                            <option value="3">I really want this</option>
                            <option value="4">I don't want this</option>
                            <option value="5">Not sure</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="50%"><h4>Finally</h4></td>
                </tr>
                <tr>
                    <td colspan="2" width="50%"><h4>This question asks about why you joined the time bank. Please rate to what extent the statements below apply to your experience.</h4></td>
                </tr>
                <tr>
                    <td colspan="2" width="50%"><h4>I joined the time bank to...</h4></td>
                </tr>
                <tr>
                    <td>Meet my needs (e.g. housework)</td>
                    <td colspan="2" width="50%">
                        <select name="requiredQ19" id="requiredQ19">
                            <option value="">Please Select</option>
                            <option value="1">Not at all</option>
                            <option value="2">Very little</option>
                            <option value="3">To some extent</option>
                            <option value="4">To a great extent</option>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input id="button" type="submit" name="submit" value="Submit">
                    </td> 
                </tr> 
            </table>
        </form>  
    </fieldset>
</div>