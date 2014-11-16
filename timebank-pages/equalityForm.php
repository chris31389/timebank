<div id="equality">
    <fieldset style="width:80%">
        <legend>Equalities Monitoring Form</legend> 
        <form method="POST" action="../timebank-php/equalityCheck.php" onsubmit="return checkrequired(this)"> 
            <table border="0">
                <tr>
                    <td colspan="1" width="25%">Are you:</td>
                    <td colspan="1" width="25%">
                        <select name="requiredSex" id="requiredSex">
                            <option value="">Please Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td colspan="2" width="50%">Where did you hear about the time bank?
                    <br>
                    (select all that apply)</td>
                    <td colspan="1" width="25%">What is your age?</td> 
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                      
                            <input type="checkbox" name="hearAbout[]" value="friend">A friend
                            <br>
                            <input type="checkbox" name="hearAbout[]" value="healthProf">Health professional 
                            <br>
                            <input type="checkbox" name="hearAbout[]" value="media">Media (please state)
                            <br>
                            <!--<input type="text" name="" id="test">
                            <br>-->
                            <input type="checkbox" name="hearAbout[]" value="timeMemb">Timebank member 
                            <br>
                            <input type="checkbox" name="hearAbout[]" value="volOrg">Voluntary organisation
                            <br>
                            <input type="checkbox" name="hearAbout[]" value="web">Website
                            <br>
                            <input type="checkbox" name="hearAbout[]" value="other">Other (please state)
                            <!--<br>
                            <input type="text" name="" id="test">-->
                     
                    </td>
                    <td colspan="2" width="50%">
                        <select name="requiredAge" id="requiredAge">
                            <option value="">Please Select</option>
                            <option value="18-24">18 to 24</option>-
                            <option value="25-34">25 to 34 </option>
                            <option value="35-44">35 to 44 </option>
                            <option value="45-54">45 to 54 </option>
                            <option value="55-64">55 to 64 </option>
                            <option value="65-74">65 to 74 </option>
                            <option value="75+">75+ </option>
                            <option value="not saying">Prefer not to say</option> 
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">What is your relationship status?</td>
                    <td colspan="2" width="50%">What is your sexual orientation?</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                        <select name="requiredRelationship" id="requiredRelationship">
                            <option value="">Please Select</option>
                            <option value="single">Single</option>
                            <option value="relationship">In a relationship</option>
                            <option value="partner">Living with partner</option>
                            <option value="married">Married/Civil Partnership</option>
                            <option value="divorced">Separated/Divorced Dissolved Civil Partnership</option>
                            <option value="widowed">Widowed/Surviving Civil Partner</option>
                            <option value="other">Other</option>
                            <option value="not saying">Prefer not to say</option>
                        </select>
                    </td>
                    <td colspan="2" width="50%">
                        <select name="requiredOrientation" id="requiredOrientation">
                            <option value="">Please Select</option>
                            <option value="Hetrosexual">Heterosexual</option>
                            <option value="Bisexual">Bi-sexual</option>
                            <option value="Gay">Gay</option>
                            <option value="Lesbain">Lesbian</option>
                            <option value="not saying">Prefer not to say</option>
                        </select>
                    </td>
                </tr>
                <tr>                    <td colspan="4" width="100%">What is your ethnicity?</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                        <select name="requiredEthnicity" id="requiredEthnicity">
                            <option value="">Please Select</option>
                            <option value="White English">White English</option>
                            <option value="White Irish">White Irish</option>
                            <option value="White other British">White other British</option>
                            <option value="Any other white background">Any other white background</option>
                            <option value="White and black Caribbean">White and black Caribbean</option>
                            <option value="White and black African">White and black African</option>
                            <option value="White and Asian">White and Asian</option>
                            <option value="Other mixed background">Other mixed background</option>
                            <option value="Arab">Arab</option>
                            <option value="Indian">Indian</option>
                            <option value="Bangladeshi">Bangladeshi</option>
                            <option value="Paxistani">Pakistani</option>
                            <option value="Other Asian background">Other Asian background</option>
                            <option value="Black Caribbean">Black Caribbean</option>
                            <option value="Black African">Black African</option>
                            <option value="Other Black Background">Other black background
                            <option value="Chinese">Chinese</option>
                            <option value="Traveller">Gypsy/Romany/Traveler/Other</option>
                            <option value="Other">Other (please specify)</option>
                            <option value="Not saying">Prefer not to say</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">What is your religion?</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                        <select name = "requiredReligion" id="requiredReligion">
                            <option value="">Please Select</option>
                            <option value="Christian">Christian (all denominations)</option>
                            <option value="Bhuddist">Buddhist</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Jewish">Jewish</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Atheist">Atheist</option>
                            <option value="No religion">No religion</option>
                            <option value="Other">Other (please state)</option>
                            <option value="not saying">Prefer not to say</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">What is your employment status?</td>
                    <td colspan="2" width="50%">What is your education level?</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                        <select name="requiredEmployment" id="requiredEmployment">
                            <option value="">Please Select</option>
                            <option value="FT">Employed (full time)</option>
                            <option value="PT">Employed (part time)</option>
                            <option value="SE">Self employed</option>
                            <option value="not in paid work">Not in paid work (looking for work)</option>
                            <option value="FT Student">Full time student</option>
                            <option value="Unable illness">Unable to work (due to illness or disability)</option>
                            <option value="Carer">Carer (including parent)</option>
                            <option value="Retired">Retired</option>
                            <option value="Senior">Senior citizen (over 60)</option>
                            <option value="inwaged">Unwaged</option>
                            <option value="other">Other (please specify)</option>
                            <option value="not saying">Prefer not to say</option>
                        </select>
                    </td>
                    <td colspan="2" width="50%">
                        <select name ="requiredEducation" id="requiredEducation">
                            <option value="">Please Select</option>
                            <option value="none">No formal qualifications</option>
                            <option value="gcse-olevel">GCSE/O-level</option>
                            <option value="A level">A-Level</option>
                            <option value="Degree">Degree (BSc, BA)</option>
                            <option value="Post Grad">Postgraduate (MSc, MA, PhD)</option>
                            <option value="Professional">Professional (NVQ, Btec, HND)</option>
                            <option value=Apprentice>Appreticeship</option>
                            <option value="not saying">Prefer not to say</option>
                            <option value="other">Other (please specify)</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Do you look after, give help or support to family members, friends or neighbours?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <select name="requiredCare" id="requiredCare">
                            <option value="">Please Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Is the care, help or support you provide due to:</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                        <select name="requiredCareReason" id="requiredCareReason">
                            <option value="">Please Select</option>
                            <option value="phys men disability">Long-term physical or mental-ill-health disability</option>
                            <option value="old age">Problems related to old age</option>
                            <option value="not saying">Prefer not to say</option>
                            <option value="other">Other (please specify)</option>
                            <option value="NA">Not applicable</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Are your day-to-day activities limited because of a health condition?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <select name="requiredLimited" id="requiredLimited">
                            <option value="">Please Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">If yes, please select all that apply</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                       

                    
                            <input type="checkbox" name="limitedActDetails[]" value="1">Ability to concentrate, learn or understand (Learning Disability/Difficulty)
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="2">Dexterity (e.g. carrying objects, using a keyboard)
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="3">Hearing (e.g. difficulty walking short distances, climbing stairs)
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="4">Memory
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="5">Mental ill-health
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="6">Mobility (e.g. difficulty walking short distances, climbing stairs)
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="7">Social or behavioral issues (e.g. Autism, Attention Deficit Disorder, Asperger Syndrome)
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="8">Stamina or breathing difficulty or fatigue
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="9">Vision (e.g. blindness or partial sight)
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="10">Prefer not to say
                            <br>
                            <input type="checkbox" name="limitedActDetails[]" value="11">Other (please specify)
                       
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Are you receiving a service or support from a health or social care provider?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <select name="requiredReceiveSupport" id="requiredReceivedSupport">
                            <option value="">Please Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Who provides the service or support?</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                        <select name="requiredSupportProvider" id="reqiuredSupportProvider">
                            <option value="">Please Select</option>
                            <option value="adultCare">Adult Social Care</option>
                            <option value="gp">GP</option>
                            <option value="menHeal">Mental Health</option>
                            <option value="priSector">Private sector provider</option>
                            <option value="other">Other (please specify)</option>
                            <option value="counselor">Counselor</option>
                            <option value="medProf">Medical professional</option>
                            <option value="nhs">NHS</option>
                            <option value="not saying">Prefer not to say</option>
                            <option value="NA">Not applicable</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Do you have a Care Plan?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <select name="requiredCarePlan" id="requiredCarePlan">
                            <option value="">Please Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">If yes, is your Care Plan:</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <select name="requiredCarePlanType" id="requiredCarePlanType">
                            <option value="">Please Select</option>
                            <option value="funded">Funded</option>
                            <option value="selfFunded">Self-funded</option>
                            <option value="NA">Not applicable</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">In the past month have you taken part in any of the below activities?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <select name="requiredPastActivities" id="requiredPastActivities">
                            <option value="">Please Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">If yes, please select all that apply</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="checkbox" name="volInd" value="1">Volunteered to help an individual (e.g. to help a neighbor)
                            <br>
                            <input type="checkbox" name="volNet" value="1">Volunteered through your networks (e.g. through work, or your children's school)
                            <br>
                            <input type="checkbox" name="volOut" value="1">Volunteered outside of your networks (e.g. with a charity or community centre)
                            <br>
                            <input type="checkbox" name="memGrp" value="1">Been a member of a group, club or society (hobby group, religious, political party)
                            <br>
                            <input type="checkbox" name="AttCommEv" value="1">Attended any community events (e.g. street parties, fundraisers)
                        </form>
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