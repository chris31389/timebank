<div id="equality">
    <fieldset style="width:80%">
        <legend>Equalities Monitoring Form</legend> 
        <form method="POST" action="../timebank-php/equalityCheck.php" onsubmit="return checkrequired(this)"> 
            <table border="0">
                <tr>
                    <td colspan="1" width="25%">Are you:</td>
                    <td colspan="1" width="25%">
                        <form>
                            <input type="hidden" name="requiredSex" id="Sex" value="">
                            <input type="radio" name="requiredSex" id="Sex" value="male">Male
                            <input type="radio" name="requiredSex" id="Sex" value="female">Female
                        </form>
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
                        <form>
                            <input type="checkbox" name="#" value="#">A friend
                            <br>
                            <input type="checkbox" name="#" value="#">Health professional 
                            <br>
                            <input type="checkbox" name="#" value="#">Media (please state)
                            <br>
                            <input type="text" name="requiredtest" id="test">
                            <br>
                            <input type="checkbox" name="#" value="#">Timebank member 
                            <br>
                            <input type="checkbox" name="#" value="#">Voluntary organisation
                            <br>
                            <input type="checkbox" name="#" value="#">Website
                            <br>
                            <input type="checkbox" name="#" value="#">Other (please state)
                            <br>
                            <input type="text" name="#" value="">
                        </form>
                    </td>
                    <td colspan="2" width="50%">
                        <form>
                            <input type="radio" name="requiredAge" id="hearAbout" value="#">18 to 24
                            <br>
                            <input type="radio" name="requiredAge" id="hearAbout" value="#">25 to 34 
                            <br>
                            <input type="radio" name="requiredAge" id="hearAbout" value="#">35 to 44 
                            <br>
                            <input type="radio" name="requiredAge" id="hearAbout" value="#">45 to 54 
                            <br>
                            <input type="radio" name="requiredAge" id="hearAbout" value="#">55 to 64 
                            <br>
                            <input type="radio" name="requiredAge" id="hearAbout" value="#">65 to 74 
                            <br>
                            <input type="radio" name="requiredAge" id="hearAbout" value="#">75+ 
                            <br>
                            <input type="radio" name="requiredAge" id="hearAbout" value="#">Prefer not to say 
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">What is your relationship status?</td>
                    <td colspan="2" width="50%">What is your sexual orientation?</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                        <form>
                            <input type="radio" name="#" value="#">Single
                            <br>
                            <input type="radio" name="#" value="#">In a relationship 
                            <br>
                            <input type="radio" name="#" value="#">Living with partner
                            <br>
                            <input type="radio" name="#" value="#">Married/Civil Partnership
                            <br>
                            <input type="radio" name="#" value="#">Separated/Divorced Dissolved Civil Partnership
                            <br>
                            <input type="radio" name="#" value="#">Widowed/Surviving Civil Partner
                            <br>
                            <input type="radio" name="#" value="#">Other
                            <br>
                            <input type="radio" name="#" value="#">Prefer not to say
                        </form>
                    </td>
                    <td colspan="2" width="50%">
                        <form>
                            <input type="radio" name="#" value="#">Heterosexual
                            <br>
                            <input type="radio" name="#" value="#">Bi-sexual 
                            <br>
                            <input type="radio" name="#" value="#">Gay
                            <br>
                            <input type="radio" name="#" value="#">Lesbian
                            <br>
                            <input type="radio" name="#" value="#">Prefer not to say
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">What is your ethnicity?</td>
                </tr>
                <tr>
                    <form>
                        <td colspan="2" width="50%">
                            <input type="radio" name="#" value="#">White English
                            <br>
                            <input type="radio" name="#" value="#">White Irish
                            <br>
                            <input type="radio" name="#" value="#">White other British
                            <br>
                            <input type="radio" name="#" value="#">Any other white background
                            <br>
                            <input type="radio" name="#" value="#">White and black Caribbean
                            <br>
                            <input type="radio" name="#" value="#">White and black African
                            <br>
                            <input type="radio" name="#" value="#">White and Asian
                            <br>
                            <input type="radio" name="#" value="#">Other mixed background
                            <br>
                            <input type="radio" name="#" value="#">Arab
                            <br>
                            <input type="radio" name="#" value="#">Other (please specify)
                        </td>
                        <td colspan="2" width="50%">
                            <input type="radio" name="#" value="#">Indian
                            <br>
                            <input type="radio" name="#" value="#">Bangladeshi
                            <br>
                            <input type="radio" name="#" value="#">Pakistani
                            <br>
                            <input type="radio" name="#" value="#">Other Asian background
                            <br>
                            <input type="radio" name="#" value="#">Black Caribbean
                            <br>
                            <input type="radio" name="#" value="#">Black African
                            <br>
                            <input type="radio" name="#" value="#">Other black background
                            <br>
                            <input type="radio" name="#" value="#">Chinese
                            <br>
                            <input type="radio" name="#" value="#">Gypsy/Romany/Traveler/Other
                            <br>
                            <input type="radio" name="#" value="#">Prefer not to say
                        </td>
                    </form>
                </tr>
                <tr>
                    <td colspan="4" width="100%">What is your religion?</td>
                </tr>
                <tr>
                    <form>
                        <td colspan="2" width="50%">
                            <input type="radio" name="#" value="#">Christian (all denominations)
                            <br>
                            <input type="radio" name="#" value="#">Buddhist
                            <br>
                            <input type="radio" name="#" value="#">Hindu
                            <br>
                            <input type="radio" name="#" value="#">Jewish
                            <br>
                            <input type="radio" name="#" value="#">Muslim
                            <br>
                            <input type="radio" name="#" value="#">Sikh
                        </td>
                        <td colspan="2" width="50%">
                            <input type="radio" name="#" value="#">Atheist
                            <br>
                            <input type="radio" name="#" value="#">No religion
                            <br>
                            <input type="radio" name="#" value="#">Other (please state)
                            <br>
                            <input type="radio" name="#" value="#">Prefer not to say
                        </td>
                    </form>
                </tr>
                <tr>
                    <td colspan="2" width="50%">What is your employment status?</td>
                    <td colspan="2" width="50%">What is your education level?</td>
                </tr>
                <tr>
                    <td colspan="2" width="50%">
                        <form>
                            <input type="radio" name="#" value="#">Employed (full time)
                            <br>
                            <input type="radio" name="#" value="#">Employed (part time)
                            <br>
                            <input type="radio" name="#" value="#">Self employed
                            <br>
                            <input type="radio" name="#" value="#">Not in paid work (looking for work)
                            <br>
                            <input type="radio" name="#" value="#">Full time student
                            <br>
                            <input type="radio" name="#" value="#">Unable to work (due to illness or disability)
                            <br>
                            <input type="radio" name="#" value="#">Carer (including parent)
                            <br>
                            <input type="radio" name="#" value="#">Retired
                            <br>
                            <input type="radio" name="#" value="#">Senior citizen (over 60)
                            <br>
                            <input type="radio" name="#" value="#">Unwaged
                            <br>
                            <input type="radio" name="#" value="#">Other (please specify)
                            <br>
                            <input type="radio" name="#" value="#">Prefer not to say
                        </form>
                    </td>
                    <td colspan="2" width="50%">
                        <form>
                            <input type="radio" name="#" value="#">No formal qualifications
                            <br>
                            <input type="radio" name="#" value="#">GCSE/O-level
                            <br>
                            <input type="radio" name="#" value="#">A-Level
                            <br>
                            <input type="radio" name="#" value="#">Degree (BSc, BA)
                            <br>
                            <input type="radio" name="#" value="#">Postgraduate (MSc, MA, PhD)
                            <br>
                            <input type="radio" name="#" value="#">Professional (NVQ, Btec, HND)
                            <br>
                            <input type="radio" name="#" value="#">Appreticeship
                            <br>
                            <input type="radio" name="#" value="#">Prefer not to say
                            <br>
                            <input type="radio" name="#" value="#">Other (please specify)
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Do you look after, give help or support to family members, friends or neighbours?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="radio" name="#" value="#">Yes
                            <input type="radio" name="#" value="#">No
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Is the care, help or support you provide due to:</td>
                </tr>
                <tr>
                    <form>
                        <td colspan="2" width="50%">
                            <input type="radio" name="#" value="#">Long-term physical or mental-ill-health disability
                            <br>
                            <input type="radio" name="#" value="#">Prefer not to say
                        </td>
                        <td colspan="2" width="50%">
                            <input type="radio" name="#" value="#">Problems related to old age
                            <br>
                            <input type="radio" name="#" value="#">Other (please specify)
                        </td>
                    </form>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Are your day-to-day activities limited because of a health condition?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="radio" name="#" value="#">Yes
                            <input type="radio" name="#" value="#">No
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">If yes, please select all that apply</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="checkbox" name="#" value="#">Ability to concentrate, learn or understand (Learning Disability/Difficulty)
                            <br>
                            <input type="checkbox" name="#" value="#">Dexterity (e.g. carrying objects, using a keyboard)
                            <br>
                            <input type="checkbox" name="#" value="#">Hearing (e.g. difficulty walking short distances, climbing stairs)
                            <br>
                            <input type="checkbox" name="#" value="#">Memory
                            <br>
                            <input type="checkbox" name="#" value="#">Mental ill-health
                            <br>
                            <input type="checkbox" name="#" value="#">Mobility (e.g. difficulty walking short distances, climbing stairs)
                            <br>
                            <input type="checkbox" name="#" value="#">Social or behavioral issues (e.g. Autism, Attention Deficit Disorder, Asperger Syndrome)
                            <br>
                            <input type="checkbox" name="#" value="#">Stamina or breathing difficulty or fatigue
                            <br>
                            <input type="checkbox" name="#" value="#">Vision (e.g. blindness or partial sight)
                            <br>
                            <input type="checkbox" name="#" value="#">Prefer not to say
                            <br>
                            <input type="checkbox" name="#" value="#">Other (please specify)
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Are you receiving a service or support from a health or social care provider?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="radio" name="#" value="#">Yes
                            <input type="radio" name="#" value="#">No
                        </form>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Who provides the service or support?</td>
                </tr>
                <tr>
                    <form>
                        <td colspan="2" width="50%">
                            <input type="radio" name="#" value="#">Adult Social Care
                            <br>
                            <input type="radio" name="#" value="#">GP
                            <br>
                            <input type="radio" name="#" value="#">Mental Health
                            <br>
                            <input type="radio" name="#" value="#">Private sector provider
                            <br>
                            <input type="radio" name="#" value="#">Other (please specify)
                        </td>
                        <td colspan="2" width="50%">
                            <input type="radio" name="#" value="#">Counselor
                            <br>
                            <input type="radio" name="#" value="#">Medical professional
                            <br>
                            <input type="radio" name="#" value="#">NHS
                            <br>
                            <input type="radio" name="#" value="#">Prefer not to say
                        </td>
                    </form>
                </tr>
                <tr>
                    <td colspan="4" width="100%">Do you have a Care Plan?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="radio" name="#" value="#">Yes
                            <input type="radio" name="#" value="#">No
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">If yes, is your Care Plan</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="radio" name="#" value="#">Funded
                            <input type="radio" name="#" value="#">Self-funded
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">In the past month have you taken part in any of the below activities?</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="radio" name="#" value="#">Yes
                            <input type="radio" name="#" value="#">No
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">If yes, please select all that apply</td>
                </tr>
                <tr>
                    <td colspan="4" width="100%">
                        <form>
                            <input type="checkbox" name="#" value="#">Volunteered to help an individual (e.g. to help a neighbor)
                            <br>
                            <input type="checkbox" name="#" value="#">Volunteered through your networks (e.g. through work, or your children's school)
                            <br>
                            <input type="checkbox" name="#" value="#">Volunteered outside of your networks (e.g. with a charity or community centre)
                            <br>
                            <input type="checkbox" name="#" value="#">Been a member of a group, club or society (hobby group, religious, political party)
                            <br>
                            <input type="checkbox" name="#" value="#">Attended any community events (e.g. street parties, fundraisers)
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