<div class='containerForm'>
  <div class='cfHeader'>Choose Your Form</div>
                        <div class='cfContent'>
                            <select id="formsList">
<option value="129"> Default Legacy Form</option>
<option value="75"> Event Register</option>
<option value="77"> Event Register</option>
<option value="79"> Event Register</option>
<option value="81"> Event Register</option>
<option value="73"> Event Register</option>
<option value="69"> Event Register</option>
<option value="31"> Exit Pop</option>
<option value="39"> Exit Pop Register for LMS</option>
<option value="85"> Exit Pop Register for LMS</option>
<option value="127"> IGS 2014 - OPT IN Jan/Mar</option>
<option value="137"> IGS Advanced - Webinar</option>
<option value="125"> IGS Tour 2014 jan-mar Facebook</option>
<option value="12"> Internet Coaching School Blog Webform</option>
<option value="67"> jp1</option>
<option value="65"> jp2</option>
<option value="133"> Lead Pages Opt In</option>
<option value="33"> LMS - FB Page - Freebies opt in</option>
<option value="53"> LMS Exit Pop Up FB ADs</option>
<option value="49"> LMS Exit Pop Up Linked In Ads</option>
<option value="29"> LMS Exit Pop Up Main</option>
<option value="107"> LMS Exit Pop Up Main</option>
<option value="15"> Register for a Webinar</option>
<option value="95"> Register for an event</option>
<option value="99"> Register for an event</option>
<option value="101"> Register for an event</option>
<option value="123"> Register for an event</option>
<option value="19"> Register for an event</option>
<option value="17"> Register for an event</option>
<option value="105"> Register for an event</option>
<option value="97"> Register for an event</option>
<option value="91"> Register for an event</option>
<option value="89"> Register for an event</option>
<option value="87"> Register for an event</option>
<option value="37"> Register for Free Event</option>
<option value="83"> Register for LMS Main</option>
<option value="21"> Register for LMS Main</option>
<option value="169"> Sign up for IGS 1 Standard Tour 2014 April-June (7 Locations; Release 2)</option>
<option value="161"> Sign up for IGS 1 Standard Tour 2014 April-June (8 Locations; Release 1)</option>
<option value="163"> Sign up for IGS 1 Standard Tour 2014 April-June (Auckland)</option>
<option value="157"> Sign up for IGS Advanced Tour 2014 April-June</option>
<option value="25"> Sign up for a webinar</option>
<option value="149"> Sign up for newsletter</option>
<option value="147"> Sign up for newsletter</option>
<option value="165"> Sign up for newsletter</option>
<option value="145"> Sign up for newsletter</option>
<option value="141"> Sign up for newsletter</option>
<option value="47"> Sign up for newsletter</option>
<option value="43"> Sign up for newsletter</option>
<option value="41"> Sign up for newsletter</option>
<option value="59"> Sign up for newsletter</option>
<option value="8"> Sign up for newsletter</option>
<option value="153"> Sign up for newsletter</option>
<option value="131"> WBB Seminar Registration</option>
<option value="119"> WBB Sign Up</option>
<option value="155"> Webinar - Angela Saunders - A Stress-Free Financial Success (Sign up for Webinar Replay)</option>
<option value="139"> Webinar - Harry Dent - Economic Threads 2014</option>
<option value="201"> Webinar at 12.00pm 26JUN2014THU Kerry Boulton Million Dollar Pay Day [Inactive]</option>
<option value="203"> Webinar at 8.00pm 26JUN2014THU Kerry Boulton Million Dollar Pay Day [Inactive]</option>
<option value="181"> Webinar Replay Aldwyn Altuney Mass Media Mastery</option>
<option value="195"> Webinar Replay Calvin Hall 12pct ROI By Regional Property</option>
<option value="199"> Webinar Replay Cherie Barber Property Renovation Secrets</option>
<option value="187"> Webinar Replay Erlend Bakke 20K A Month By Outsourcing</option>
<option value="205"> Webinar Replay Gareth Jehu 1K A Week From A FB Fan Page</option>
<option value="175"> Webinar Replay Gareth Jehu FB Easy Money</option>
<option value="167"> Webinar Replay Jules Schroeder Discover Interns Sign Up #1</option>
<option value="171"> Webinar Replay Jules Schroeder Discover Interns Sign Up #2</option>
<option value="209"> Webinar Replay Kerry Boulton Million Dollar Pay Day [Active]</option>
<option value="193"> Webinar Replay Sean Rasmussen 10K A Month By Blog</option>
<option value="197"> Webinar Replay Steven Essa Outsourcing Mastery System</option>
<option value="143"> webinar sign up smw</option>

</select>
                        </div>
                        
        <div class='cfContent'>
            <textarea id="mcFormInfusionsoft" class="form-control" style="display:none;" rows="5"></textarea>
        </div>
</div>
    <div class="bottomCheckBox">
        <label class='checkbox'><input type='checkbox'>Disable Name</label>
    </div>
    <div class='parentForm'>
        <div class='containerForm'>
            <div class='cfHeader'>Name</div>
            <div class='cfContent'>
                <select id="nameField" class='form-control'><option>Choose Your Form</option></select>
            </div>
        </div>
        <div class='containerForm'>
            <div class='cfHeader'>Name Field Order</div>
            <div class='cfContent'><input class='input-mini' type='text' placeholder='0'></div>
        </div> 
    </div>
    <div class="bottomCheckBox">
        <label class='checkbox'><input type='checkbox'>Name Required</label>
    </div> 

    <div class='parentForm'>
        <div class='containerForm'>
            <div class='cfHeader'>Email</div>
            <div class='cfContent'>
                <select id='emailField' class='form-control'><option>Choose Your Form</option></select>
            </div>
        </div>

        <div class='containerForm'>
            <div class='cfHeader'>Email field Order</div>
            <div class='cfContent'>
                <input class='input-mini' type='text' placeholder='0'>
            </div>
        </div>
    </div>

    <div class='containerForm'>
        <div class='cfHeader'>Method</div>
        <div class='cfContent'>
            <select class='form-control'><option>POST</option><option>GET</option></select>
        </div>
    </div>
    <div class='containerForm'>
        <div class='cfHeader'>Form URL</div>
        <div class='cfContent'>
            <input id='formURLField' class='input-block-level' type='text' placeholder=''>
        </div>
    </div>
<script>
    $("#extraFields").hide();
    $("#addExtraFields").click(function(){
        $.ajax({type:'POST',url:'template/extraFields2.html',dataType:'html',success:function(data){$("#extraFields").append(data);}});
        $("#extraFields").show();
    });
</script>
<div class="containerForm">
    <div class='cfHeader'>Extra Fields</div>
    <div class='cfContent'>
        <div id='extraFields'></div>
        <button id='addExtraFields' type="button" class="btn btn-primary">Add new</button>
    </div>
</div>