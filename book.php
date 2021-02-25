<?php 
    $title = "Booking";
    include '_header.php'; 
?>

<!-- CONTENT HERE -->
    <main>
    <div class="content-container">
       <h1 style="margin-top: 30px; padding-left: 0px; margin-bottom: 12px;">Book a Cruise</h1>

        <form method="get" action="thanks.html">
            <fieldset style="border: none;">
                <label class="top">
                    Full Name<br><span class='highlight'></span> <input type="text" name="fullname" required>
                </label><br>
                <label class="top">
                    Address Line<br><span class='highlight'></span> <input type="text" name="address">
                </label><br>
                <label class="top">
                    City<br><input type="email" name="email">
                </label><br>
                <label class="top">State<br>
                    <select name="state">
                        <option value="">Please Select...</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </label><br>
                <label class="top">
                    Zipcode<br><input type="number" name="zip" >
                </label><br>
                <label class="top">
                    Phone Number<br><input type="tel" name="phone" >
                </label><br>
                <label class="top">
                    Email Address<br><input type="email" name="email" require>
                </label><br>
                <label class="top">Cruise Selection<br>
                    <select name="cruise">
                        <option value="">Please Select...</option>
                        <option value="mexican-cruise">Mexican Cruise</option>
                        <option value="arctic-cruise">Arctic Cruise</option>
                        <option value="caribbean-cruise">Caribbean Cruise</option>
                        <option value="mediterranean-cruise">Mediterranean Cruise</option>
                    </select>
                </label><br>

                <input id="book-button" type="submit" value="Book My Cruise" class="button"><br>
            </fieldset>

        </form>

   </div>
   </main>
    



<?php include '_footer.php'; ?>