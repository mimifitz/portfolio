<link rel="stylesheet" href="style.css">
<f<link rel="stylesheet" href="style.css">orm action="contact.php" method="post">
                    <label for="name">Name or Company Name:</label>
                    <input type="text" id="name" name="name" placeholder="Please enter your name or company's name..."
                        pattern=[A-Z\sa-z]{3,20} required>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Akua@email.com" required>
                    <label for=" services">Services:</label>
                    <select name="services" id="services" size="1">
                        <option value="option 1">Web Developer</option>
                        <option value="option 2">Sql Data Analyst</option>
                        <option value="option 3">Content Creator</option>
                        <option value="option 3">Web Developer/Sql Data Analyst</option>
                        <option value="option 3">Other</option>
                    </select>
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="text" placeholder="Subject" required>
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="10" rows="10"></textarea>
                    <input type="submit" name="submit" value="Submit" id="submit" data-submit="...Sending"
                        aria-required="true">
                </f>