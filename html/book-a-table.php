<!DOCTYPE html>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>ASR</title>
    <link rel="stylesheet" href="resources/css/style.css"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/pepper-grinder/jquery-ui.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
</head>
<body class="innerPage">
<header>
    <div class="container">
        <div class="row">
            <h1 class="logo">
                <a href="index.html">
                    <img src="resources/images/asr-logo.png" alt="American Spirits Roadhouse">
                </a>
            </h1>
            <nav class="mainNav">
                <ul>
                    <li class="level1"><a href="#"><span class="icons-sprite icons-navFoodDrinks"></span><em>Food+Drinks</em></a>
                        <ul>
                            <li><a href="#">Menus</a>
                                <ul>
                                    <li><a href="menu.html?menuType=tidbits">TIDBITS + GARDEN + FIXIN'S</a></li>
                                    <li><a href="menu.html?menuType=sammitchs">SAMM'ICHS</a></li>
                                    <li><a href="menu.html?menuType=bigums">BIG'UMS</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="level1"><a href="#"><span class="icons-sprite icons-navEvents"></span><em>Music 'n' Events</em></a>
                        <ul>
                            <li><a href="calendar-of-events.html">Calendar of Events</a></li>
                            <li><a href="karaoke.html">Karaoke Night</a></li>
                            <li><a href="open-mic-night.html">Open Mic Night</a></li>
                            <li><a href="#">Special Nights</a></li>
                        </ul>
                    </li>
                    <li class="level1"><a href="book-a-table.html"><span class="icons-sprite icons-navBookTable"></span><em>Book a Table</em></a></li>
                    <li class="level1"><a href="#"><span class="icons-sprite icons-navParties"></span><em>Private Parties</em></a>
                        <ul>
                            <li><a href="catering.html">Catering</a></li>
                            <li><a href="#">Book the Space</a></li>
                        </ul>
                    </li>
                    <li class="level1"><a href="#"><span class="icons-sprite icons-navGift"></span><em>Gift Certificates</em></a></li>
                    <li class="level1"><a href="#"><span class="icons-sprite icons-navContact"></span><em>Contact</em></a></li>
                    <li class="level1"><a href="directions.html"><span class="icons-sprite icons-navDirection"></span><em>Direction</em></a></li>
                </ul>
            </nav>
            <button class="pushMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <section>
            <article>
                <h2>book a table</h2>
                <div class="bookingATable">
                    <h4>BOOK YOUR TABLE NOW or CALL US at 908.735.0101</h4>
                    <span class="msg">All fields are mandatory</span>
                    <div class="clear"></div>
                    <form method="post" enctype="multipart/form-data action="">
                        <fieldset>
                            <span class="icons-sprite icons-bookTable iconTable"></span>
                            <ul class="type1">
                                <li>
                                    <p>Guests</p>
                                    <select name="noOfGuest" id="noOfGuest">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                    </select>

                                </li>
                                <li>
                                    <p>Date</p>
                                    <input type="text" name="date" placeholder="Select Date" id="datepicker" required/>
                                </li>
                                <li>
                                    <p>Time</p>
                                    <input type="text"  name="time" placeholder="Time" required/>
                                </li>
                            </ul>
                        </fieldset>
                        <fieldset>
                            <ul class="type2">
                                <li>
                                    <p>Full Name</p>
                                    <input type="text"  name="name" placeholder="Ex John Smith" required/>
                                </li>
                                <li>
                                    <p>Email</p>
                                    <input type="email"  name="email" placeholder="Enter Email ID" required/>
                                </li>
                                <li class="full">
                                    <p>Phone</p>
                                    <input type="tel"  name="phone" placeholder="Enter Phone Number" required/>
                                </li>
                                <li class="full">
                                    <p>Note</p>
                                    <textarea rows="3"  name="note"></textarea>
                                </li>
                            </ul>
                        </fieldset>
                        <div style="text-align: center">
                            <input type="submit" class="btn" value="Request Your Table">
                        </div>
                    </form>
					<p>We'll do our best to accommodate your request or suggest a different available time. If you do not receive a confirmation email, please call us at 908.735.0101. Thank you.</p>
                </div>
				
                <div class="clear"></div>
            </article>
        </section>
    </div>
</div>
<div class="footerwraper">
    <div style="text-align: center">
        <img src="resources/images/map-icon.png" style="margin-top: -45px;"/>
    </div>
    <div class="container">
        <footer>
        <ul>
            <li><a href="#">About Us</a>
                <ul>
                    <li><a href="#">Only at ASR</a></li>
                    <li><a href="#">Buzz</a></li>
                    <li><a href="#">Photo Gallery</a></li>
                </ul>
                <span>+</span>
            </li>
            <li><a href="#">Food + Drinks</a>
                <ul>
                    <li><a href="menu.html">Menus</a></li>
                </ul>
                <span>+</span>
            </li>
            <li><a href="#">Entertainment 'n' Events</a>
                <ul>
                    <li><a href="calendar-of-events.html">Calendar of Events</a></li>
                    <li><a href="karaoke.html">Karaoke Night</a></li>
                    <li><a href="open-mic-night.html">Open Mic Night</a></li>
                    <li><a href="#">Special Nights</a></li>
                </ul>
                <span>+</span>
            </li>
            <li><a href="#">Our Team</a>
                <ul>
                    <li><a href="gm.html">General Manager</a></li>
                    <li><a href="our-chef.html">Chef's Bio</a></li>
                    <li><a href="key-staff.html">Key Staff</a></li>
                </ul>
                <span>+</span>
            </li>
            <li><a href="#">Private Parties</a>
                <ul>
                    <li><a href="catering.html">Catering</a></li>
                    <li><a href="#">Book the Space</a></li>
                </ul>
                <span>+</span>
            </li>
            <li><a href="#">Book a Table</a>
                <ul>
                    <li><a href="book-a-table.html">Reserve a Table</a></li>
                </ul>
                <span>+</span>
            </li>
            <li><a href="#">Contact Us</a>
                <ul>
                    <li><a href="#">Questions?</a></li>
                    <li><a href="directions.html">Directions</a></li>
                </ul>
                <span>+</span>
            </li>
        </ul>
        <div class="infoFooter row">
            <div class="address">
                <span class="icons-sprite icons-address"></span>
                <p>
                    1090 State Route 173<br/>Asbury, NJ  08802</p>
            </div>
            <div class="phone">
                <span class="icons-sprite icons-phone"></span>
                <p>
                     908.735.0101
                </p>
            </div>
            <div class="email">
                <span class="icons-sprite icons-email"></span>
                <p>
                    info@asr.com
                </p>
            </div>
        </div>
        <div class="credits">
            <p class="copy">&copy; Copyrights 2015 | American Spirits House</p>
            <p class="webmaster">Credits Creativerootz</p>
            <div class="clear"></div>
        </div>
    </footer>
    </div>
</div>
<script type="text/javascript" src="resources/js/build/production.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
</body>
</html>