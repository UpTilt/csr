<!DOCTYPE html>
<html>
<head>
    <title>CSS Starter Kit :: Uptilt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- for mobile, yo -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/compiled.css') }}"> <!-- user css -->

</head>
<body>
<div class="root-body">
<header>
    <img id="gs-logo" src="{{ asset('assets/img/GSLogo100px.svg')  }}" alt="Geek Squad Logo">

    <span id="application-title" class="header-item">CSR Tracker</span>
    <div class="header-item goals-wrap">
        <span>Production: </span><span id="current-production">10.75</span>
        <div class="graph-wrap">
            <span class="graph-bar" style="width: 35%"></span>
        </div>
    </div>
    <span class="cog-full settings-toggle"><i class="fa fa-lg fa-cogs" aria-hidden="true"></i></span>
    <span class="logout"><i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></span>
</header>
<div class="settings-container">
    <div class="settings-wrap">
        <h4 id="settings-header">Rick Bennett</h4>
        <div>
            <span>Hours</span>
            <span id="hours-worked-box" contenteditable="true">8</span>
        </div>
        <div>
            <span>Exempt</span>
            <span id="hours-exempt-box">0</span>
        </div>
        <button class="button-update-hours">Update Hours</button>
        <hr style="border-bottom: 1px solid white">
        <div class="settings-button-wrap">
            <button class="button-notes ut-modal-trigger" data-ut-modal-target="modal-notes">Notes</button>
            <button class="button-suggestions ut-modal-trigger" data-ut-modal-target="modal-suggestions">Suggestions</button>
        </div>
        <hr style="border-bottom: 1px solid white; margin-top: 0">
        <button class="button-change-password ut-modal-trigger" data-ut-modal-target="modal-change-password">Change password</button>
    </div>
    <span class="cog-mobile settings-toggle">&middot; &middot; &middot;</span>
</div>
<div class="main-content-container">
    <div class="metrics">
        <div class="metrics-detail">
            <div id="metrics-cat-call" class="metrics-cat">
                <span class="cat-header">Calls:</span>
                <div id="call-proactive" class="entry-wrap">
                    <div class="entry-label">
                        <span>Proactive</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">5</span>
                        <span class="graph-bar" style="width: 25%"></span>
                    </div>
                </div>
                <div id="call-covert-proactive" class="entry-wrap">
                    <div class="entry-label">
                        <span>Covert Proactive</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">15</span>
                        <span class="graph-bar" style="width: 75%"></span>
                    </div>
                </div>
                <div  id="call-sony-proactive" class="entry-wrap">
                    <div class="entry-label">
                        <span>Sony Proactive</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
                <div id="call-sony-escalation" class="entry-wrap">
                    <div class="entry-label">
                        <span>Sony Escalation</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">5</span>
                        <span class="graph-bar" style="width: 41%"></span>
                    </div>
                </div>
            </div>

            <div id="metrics-cat-res" class="metrics-cat metric-research">
                <span class="cat-header">Research:</span>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Proactive</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Covert Proactive</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">15</span>
                        <span class="graph-bar" style="width: 75%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Sony Proactive</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
            </div>

            <div id="metrics-cat-esc" class="metrics-cat metric-escalations">
                <span class="cat-header">Escalations:</span>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Beats</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">0</span>
                        <span class="graph-bar" style="width: 0%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Covert</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">15</span>
                        <span class="graph-bar" style="width: 75%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Geek Squad City</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Missing Unit</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">5</span>
                        <span class="graph-bar" style="width: 41%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Sony</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">0</span>
                        <span class="graph-bar" style="width: 0%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Training</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">5</span>
                        <span class="graph-bar" style="width: 25%"></span>
                    </div>
                </div>
            </div>

            <div id="metrics-cat-fu" class="metrics-cat metric-follow-ups">
                <span class="cat-header">Follow-ups:</span>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Beats</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Geek Squad City</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">0</span>
                        <span class="graph-bar" style="width: 0%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Missing Unit</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Sony</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
            </div>

            <div id="metrics-cat-box" class="metrics-cat metric-box-kits">
                <span class="cat-header">Box Kits:</span>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Covert</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Sony</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
            </div>

            <div id="metrics-cat-email" class="metrics-cat metric-email">
                <span class="cat-header">Email:</span>
                <div class="entry-wrap">
                    <div class="entry-label">
                        <span>Sony</span>
                    </div>
                    <div class="graph-wrap">
                        <span class="number">8</span>
                        <span class="graph-bar" style="width: 66%"></span>
                    </div>
                </div>
            </div>

        </div>
        <div class="right-side">
            <div class="slide-selection">
                <span id="slide-sel-activities" class="slide-sel-button">Activities</span>
                <span id="slide-sel-notes" class="slide-sel-button">Notes</span>
                <span class="slide-sel-loc">&nbsp;</span>
            </div>
            <div class="notes-detail">
                <p>Notes go here.</p>
            </div>
            <div class="slide-container">
                <div id="listjs-activity" class="left-slide">
                    <div class="search-wrap">
                        <input type="text" class="search" placeholder="Search">
                        <select name="search-filter" id="search-filter" class="search-filter">
                            <option value="All">Category</option>
                            <option disabled>-------------</option>
                            <option value="Calls">Calls</option>
                            <option value="Research">Research</option>
                            <option value="Escalations">Escalations</option>
                            <option value="Follow-ups">Follow-ups</option>
                            <option value="Box Kits">Box Kits</option>
                            <option value="Email">Email</option>
                        </select>
                    </div>
                    <hr class="search-sep">
                    <div id="activity-table-wrap">
                        <table>
                            <tr class="table-headers">
                                <th>SO</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th class="t_del"></th>
                            </tr>
                            <tbody class="list">
                            <tr>
                                <td class="t_so">01320-846832152</td>
                                <td class="t_cat">Calls</td>
                                <td class="t_fun">Geek Squad City</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-987624587</td>
                                <td class="t_cat">Research</td>
                                <td class="t_fun">Proactive</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-123456789</td>
                                <td class="t_cat">Follow-ups</td>
                                <td class="t_fun">Beats</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">00548-197354824</td>
                                <td class="t_cat">Escalations</td>
                                <td class="t_fun">Missing Unit</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">00137-654817934</td>
                                <td class="t_cat">Box Kits</td>
                                <td class="t_fun">Sony</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-123456789</td>
                                <td class="t_cat">Escalations</td>
                                <td class="t_fun">Training</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-123456789</td>
                                <td class="t_cat">Email</td>
                                <td class="t_fun">Sony</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-123456789</td>
                                <td class="t_cat">Follow-ups</td>
                                <td class="t_fun">Missing Unit</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-123456789</td>
                                <td class="t_cat">Calls</td>
                                <td class="t_fun">Sony Proactive</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-123456789</td>
                                <td class="t_cat">Research</td>
                                <td class="t_fun">Covert Proactive</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-123456789</td>
                                <td class="t_cat">Escalations</td>
                                <td class="t_fun">Covert</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td class="t_so">01320-123456789</td>
                                <td class="t_cat">Follow-ups</td>
                                <td class="t_fun">Geek Squad City</td>
                                <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="right-slide">
                    <div class="notes-table-wrap">
                        <table>
                            <tr class="table-headers">
                                <th>Type/Reason</th>
                                <th>Start time</th>
                                <th>End Time</th>
                                <th>Length</th>
                                <th class="t_del"></th>
                            </tr>
                            <tbody>
                                <tr class="notes-row">
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                    <td class="notes-detail-ph">These are the notes dood!</td>
                                </tr>
                                <tr class="notes-row">
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                    <td class="notes-detail-ph">Da text changes based on the element you hover on! Da text changes based on the element you hover on! Da text changes based on the element you hover on! Da text changes based on the element you hover on! Da text changes based on the element you hover on! Da text changes based on the element you hover on! Da text changes based on the element you hover on!</td>
                                </tr>
                                <tr class="notes-row">
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                    <td class="notes-detail-ph">See, this is the third entry! :3</td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Cause, yo</td>
                                    <td>12:00 PM</td>
                                    <td>2:00 PM</td>
                                    <td>2 Hours</td>
                                    <td class="t_del"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="so-entry"><input type="text" placeholder="Enter SO number here"></div>
    <div class="main-buttons">
        <div class="button-wrapper bw-esc">
            <button class="button button-esc-root button-toggle">Escalations</button>
            <div class="popup">
                <button class="button button-esc-sub">Beats</button>
                <button class="button button-esc-sub">Covert</button>
                <button class="button button-esc-sub">Geek Squad City</button>
                <button class="button button-esc-sub">Missing Unit</button>
                <button class="button button-esc-sub">Sony</button>
                <button class="button button-esc-sub">Training</button>
            </div>
        </div>
        <div class="button-wrapper bw-fu">
            <button class="button button-fu-root button-toggle">Follow-ups</button>
            <div class="popup">
                <button class="button button-fu-sub">Beats</button>
                <button class="button button-fu-sub">Geek Squad City</button>
                <button class="button button-fu-sub">Missing Unit</button>
                <button class="button button-fu-sub">Sony</button>
            </div>
        </div>
        <div class="button-wrapper bw-call">
            <button class="button button-call-root button-toggle">Calls</button>
            <div class="popup">
                <button class="button button-call-sub">Proactive</button>
                <button class="button button-call-sub">Covert Proactive</button>
                <button class="button button-call-sub">Sony Proactive</button>
                <button class="button button-call-sub">Sony Escalation</button>
            </div>
        </div>
        <div class="button-wrapper bw-res">
            <button class="button button-res-root button-toggle">Research</button>
            <div class="popup">
                <button class="button button-res-sub">Proactive</button>
                <button class="button button-res-sub">Covert Proactive</button>
                <button class="button button-res-sub">Sony Proactive</button>
            </div>
        </div>
        <div class="button-wrapper bw-box">
            <button class="button button-box-root button-toggle">Box Kits</button>
            <div class="popup">
                <button class="button button-box-sub">Covert</button>
                <button class="button button-box-sub">Sony</button>
            </div>
        </div>
        <div class="button-wrapper bw-email">
            <button class="button button-email-root button-toggle">Email</button>
            <div class="popup">
                <button class="button button-email-sub">Sony</button>
            </div>
        </div>
    </div>
</div>
</div> <!-- // root-body // -->
<div class="root-modals">
    <!-- Notes Modal -->
    <div id="modal-notes" class="">
        <div class="ut-modal-outer">
            <div class="ut-modal-inner">
                <i class="fa fa-times fa-2x ut-modal-close" data-ut-modal-target="modal-notes"></i>
                <h2 class="ut-modal-header">Notes</h2>
                <div class="ut-modal-body">
                    <form action="">
                        <div class="input-group">
                            <label for="">Reason</label>
                            <select name="" id="" style="width: 100%">
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                                <option value="">Option 4</option>
                                <option value="">Option 5</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="">Start time</label>
                            <input type="time">
                        </div>
                        <div class="input-group">
                            <label for="">End time</label>
                            <input type="time">
                        </div>
                        <div class="input-group">
                            <label for="">Notes</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="button button-notes-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Suggestions Modal -->
    <div id="modal-suggestions" class="">
        <div class="ut-modal-outer">
            <div class="ut-modal-inner">
                <i class="fa fa-times fa-2x ut-modal-close" data-ut-modal-target="modal-suggestions"></i>
                <h2 class="ut-modal-header">Suggestions</h2>
                <div class="ut-modal-body">
                    <form action="">
                        <p>Dis be da suggestions page.</p>
                        <div class="input-group">
                            <label for="">Suggestion</label>
                            <textarea name="" id="" cols="30" rows="11"></textarea>
                        </div>
                        <button class="button button-suggestions-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div id="modal-change-password" class="">
        <div class="ut-modal-outer">
            <div class="ut-modal-inner">
                <i class="fa fa-times fa-2x ut-modal-close" data-ut-modal-target="modal-change-password"></i>
                <h2 class="ut-modal-header">Change Password</h2>
                <div class="ut-modal-body">
                    <form action="">
                        <div class="input-group">
                            <label for="">Current password</label>
                            <input type="password">
                        </div>
                        <div class="input-group">
                            <label for="">New password</label>
                            <input type="password">
                        </div>
                        <div class="input-group">
                            <label for="">Confirm new password</label>
                            <input type="password">
                        </div>
                        <button class="button button-password-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!-- required -->
<script src="{{ asset('assets/js/compiled.js') }}"></script> <!-- user js sheet -->
<script src="{{ asset('assets/js/app.js') }}"></script> <!-- user js sheet -->
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>
<script>
    $(function() {

        // ===============
        // General Application Functions
        // =======

        // This function will adjust the hover functionality to work on different screen sizes
        // Needs to be called when the window size changes so it can read the current window
        // State and bind the handlers accordingly
        function bindHoverHandlers() {
            if(window.matchMedia('(max-width: 1200px)').matches) {
                // This is to remove the hover handler when the resolution changes
                $('.button-wrapper').unbind('mouseenter mouseleave');
            } else {
                // Set the hover functionality to show the hidden element
                $('.button-wrapper').hover(function() {
                    // Check to see if the currently hovered element is already toggled
                    if($(this).find('.popup').hasClass('click-visible')) {
                        $('.button-wrapper').find('.popup').removeClass('click-visible');
                        $(this).find('.popup').addClass('click-visible');
                    } else {
                        $('.button-wrapper').find('.popup').removeClass('click-visible');
                        $('.button-toggle').not(this).css({'background': '', 'border-color': ''});
                    }
                    // Show the element on hover
                    $(this).find('.popup').addClass('hover-visible');
                }, function() {
                    // Hide the element on... not-hover?
                    $(this).find('.popup').removeClass('hover-visible');
                });
            }
        }

        function colorToHex(color) {
            if (color.substr(0, 1) === '#') {
                return color;
            }
            var digits = /(.*?)rgb\((\d+), (\d+), (\d+)\)/.exec(color);

            var red = parseInt(digits[2]);
            var green = parseInt(digits[3]);
            var blue = parseInt(digits[4]);

            var rgb = blue | (green << 8) | (red << 16);
            return digits[1] + '#' + rgb.toString(16);
        }

        function ColorLuminance(hex, lum) {

            // validate hex string
            hex = String(hex).replace(/[^0-9a-f]/gi, '');
            if (hex.length < 6) {
                hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
            }
            lum = lum || 0;

            // convert to decimal and change luminosity
            var rgb = "#", c, i;
            for (i = 0; i < 3; i++) {
                c = parseInt(hex.substr(i*2,2), 16);
                c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
                rgb += ("00"+c).substr(c.length);
            }

            return rgb;
        }

        // ===============
        // Application Event Handlers
        // =======

        // Poll the window when the width changes to set the correct handlers
        $(window).resize(function () {
            $('.button-wrapper').find('.popup').removeClass('hover-visible click-visible');
            $('.button-toggle').css({'background': '', 'border-color': ''});
            bindHoverHandlers();
        });

        // Click to hold the popup windows in place
        $('.button-toggle').click(function() {
            // Toggle class for currently selected element
            $(this).parent().find('.popup').toggleClass('click-visible');
            // Remove those that are not the selected element
            $('.button-toggle').not(this).parent().find('.popup').removeClass('click-visible');

            // Change the background of the currently selected elements
            bgColor = $(this).css('background-color');
            // Reset the colors of everything initially
            $('.button-toggle').css({'background': '', 'border-color': ''});

            if($(this).parent().find('.popup').hasClass('click-visible')) {
                $(this).css({'background': ColorLuminance(colorToHex(bgColor), -.3), 'border-color': ColorLuminance(colorToHex(bgColor), -.3)});
            }
        });

        // For changing the background of the table elements on hover
        $('tr').not('.table-headers').hover(function() {
            $(this).css({   'background-color': 'rgba(0, 0, 0, 0.1)',
                            'color': ''});
        }, function () {
            $(this).css({   'background-color': '',
                            'color': ''});
        });

        $('.notes-row').hover(function () {
            console.log('Hover On');
            $('.notes-detail').html($(this).find('.notes-detail-ph').text()).css({
                'opacity' : 1,
                'left' : '0'
            });

        }, function() {
            console.log('Hover Off');
            $('.notes-detail').css({
                'opacity' : 0,
                'left' : '100%'
            });
        });

        // Displaying the settings menu
        $(".settings-toggle, .button-notes, .button-suggestions, .button-change-password").click(function() {
            $('.settings-wrap').slideToggle();
        });

        // Toggling the slide container left and right
        $('#slide-sel-activities').click(function() {
            $('.slide-sel-loc').css('left', '0');
            $('.slide-container').css('left', '0');
        });
        $('#slide-sel-notes').click(function() {
            $('.slide-sel-loc').css('left', '50%');
            $('.slide-container').css('left', '-100%');
        });


        // Page load setup
        bindHoverHandlers();

        // Idea
//        graphSetValues($cat, $ele, $prod);
//        $(function() {
//           $('#metrics-cat-call #call-proactive').find('.number').html('10');
//        });

        //================
        // Table search functionality via List.js
        //===========

        var options = {
            valueNames: [ 't_so', 't_cat', 't_fun' ]
        };

        var featureList = new List('listjs-activity', options);

        // Update table based on filters
        $('#search-filter').change(function() {
            featureList.filter(function(item) {
                if (item.values().t_cat == $('#search-filter').val()) {
                    console.log("Stuff")
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });

        // Revert filters if nothing is selected
        $('#search-filter').change(function(){
            if($('#search-filter').val() == 'All') {
                console.log("All");
                featureList.filter();
                return true;
            }
        });

    });
</script>
</body>