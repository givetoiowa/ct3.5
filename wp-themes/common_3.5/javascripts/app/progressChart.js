/**
 * JavaScript Document
 * Author: Jacobi Ayala / UIF
 * Company: UI Foundation
 * Date Last Edited: refactored by Addison on 6/11/2014
 * The purpose of this document is to provide a single reference for UIF employees to update progress towards the current campaign goal. Changes made here will reflect throughout the public and private sites.
 */

/**
 * Gets current site to determine which progress bar to use
 * @returns {pathArray[2]} string of current site (may need to change index for live site)
 */
function get_current_site(){
    var pathArray = window.location.pathname.split( '/' );
    return pathArray[2];
}

/**
 * campaignProgress is a "class", or rather a function, that takes two arguments. It has locally defined methods and functions that serve to return data stored in the object. Comments are added for each method and function for clarity, although the names are self explanatory.
 * @param; goal - an integer or float that represents the goal of the campaign.
 * @param; current - an integer or float that represents the current campaign progress.
 */
function campaignProgress(goal, current){
    //Calculates a percentage for goal and current.
    var percent =  Math.floor(current / goal  * 100);
    //A getter for goal.
    this.getGoal = function(){
        return goal;
    }
    //A getter for current.
    this.getCurrent = function(){
        return current;
    }
    //A getter for percent.
    this.getPercent = function(){
        return percent;
    }
    //A function to cast an integer to a string and insert commas for integers with more than 3 digits. Look up .indexOf() and .slice() if you are unsure how they work.
    function mySlice(num){
        var myString = String(num);
        var size = myString.length;

        if (size > 3 && myString.indexOf(".") == -1){
            for (i = size - 3; (i + 3) > 3; i = i- 3){
                myString = myString.slice(0,i) + "," + myString.slice(i);
            }
        }
        return myString;
    }
    //toString overrides the built-in toString method. This method is called inside a php file titled 'progress_chart'.
    this.writeProgressBarMillions = function(){
        document.getElementById('progressBar').innerHTML = '<div class="campaign_progress" ><div class="campaign_percentage_bar">'+String(this.getPercent())+'% Percent Unit Progress</div><div class="campaign_dollars">$'+mySlice(this.getCurrent())+'<span class="goal"> of $' + mySlice(this.getGoal()) + '</span></div></div>';
    }

    //toString2 is intended for the progress bar on the home page
    this.writeProgressBarBillions = function(){
        var string = '<div class="new_campaign_progress" ><div class="new_campaign_percentage_bar">'+String(this.getPercent())+'% Percent Unit Progress</div><div class="new_campaign_dollars">$'+this.getCurrent()+' Billion<span class="new_goal"> of $' + this.getGoal() + ' Billion</span></div></div>';
        return string;
    }

    //toString3 is intended for the progress bar on the we-are-levitt
    this.writeProgressBarPercent = function(){
        var string = '<div class="new_campaign_progress" ><div class="new_campaign_percentage_bar">'+String(this.getPercent())+'% Percent Unit Progress</div><div class="new_campaign_dollars">'+this.getCurrent()+'%<span class="new_goal"> of our goal reached</span></div></div>';
        return string;
    }
}

/**
 * Writes campaign progress
 * @param Progress
 * @returns {*}
 */
function write_campign_progress(Progress){
    var percent = String(Progress.getPercent());
    return Progress.writeProgressBarMillions();
}

//totalProgress is an object of type campaignProgress and is for the combined goal and progress of all campaigns.
//total +.003136220 (CMN)
var totalProgress = new campaignProgress(1.70, 1.271);
//monthlyProgress is an object of type campaignProgress and is for the combined goal and progress of all campaigns for monthly update.
//total +.002691 (CMN)

var monthlyProgress = new campaignProgress(1.70, 1.269);

//alumniProgress is for the goal and progress of the campaign for the Alumni Association.
var alumniProgress = new campaignProgress(14250000, 8463510);

// load appropriate chart
var current_site = get_current_site();
if (current_site == 'engineering'){
    //engineeringProgress is for the goal and progress of the Engineering Campaign.
    var engineeringProgress = new campaignProgress(55000000, 39680776);
    write_campign_progress(engineeringProgress);
} else if (current_site == 'education'){
    //education is for the goal and progress of the Education Campaign.
    var educationProgress = new campaignProgress(30000000, 27208558);
    write_campign_progress(educationProgress);
} else if(current_site == 'artscampaign'){
    //artsProgress is for the goal and progress of the Arts Campus Campaign.
    var artsProgress = new campaignProgress(30000000, 9082229);
    write_campign_progress(artsProgress);
} else if(current_site == 'athletics'){
    //athleticsProgress is for the goal and progress of the Athletics Campaign.
    var athleticsProgress = new campaignProgress(240000000, 193742820);
    write_campign_progress(athleticsProgress);
} else if (current_site == 'business'){
    //businessProgresss is for the goal and progress of the Business Campaign.
    var businessProgress = new campaignProgress(125000000, 58905396);
    write_campign_progress(businessProgress);
} else if (current_site == 'public-health'){
    //capitalProgress is for the goal and progress of the CPH Capital Campaign.
    var capitalProgress = new campaignProgress(25800000, 21578369);
    write_campign_progress(capitalProgress);
} else if(current_site == 'dentistry'){
    //dentistryProgress is for the goal and progress of the Dentistry Campaign.
    var dentistryProgress = new campaignProgress(26500000, 20414549);
    write_campign_progress(dentistryProgress);
} else if (current_site == 'graduate'){
    //graduateProgress is for the goal and progress of the Graduate College Campaign.
    var graduateProgress = new campaignProgress(12000000, 10198731);
    write_campign_progress(graduateProgress);
} else if (current_site == 'hancher'){
    //hancherProgress is for the goal and progress of the Hancher Campaign.
    var hancherProgress = new campaignProgress(16000000, 15112868);
    write_campign_progress(hancherProgress);
} else if (current_site == 'law'){
    //lawProgress is for the goal and progresss of the Law Campaign.
    var lawProgress = new campaignProgress(50000000, 34466835);
    write_campign_progress(lawProgress);
} else if (current_site == 'liberal-arts'){
    //liberalProgress is for the goal and progress of the Liberal Arts & Sciences Camapaign.
    var liberalProgress = new campaignProgress(140000000, 103617001);
    write_campign_progress(liberalProgress);
} else if (current_site == 'libraries'){
    //librariesProgress is for the goal and progress of the Libraries Campaign.
    var librariesProgress = new campaignProgress(10000000, 7406688);
    write_campign_progress(librariesProgress);
} else if (current_site == 'medicine'){
    //medicalProgress is for the goal and progress of the Medical Center CPN Campaign.
    var medicalProgress = new campaignProgress(703500000, 539169627);
    write_campign_progress(medicalProgress);
} else if (current_site == 'museums'){
    //museumProgress is for the goal and progress of the Museum of Art Campaign.
    var museumProgress = new campaignProgress(5000000, 4723714);
    write_campign_progress(museumProgress);
} else if (current_site == 'nursing'){
    //nursingProgress is for the goal and progress of the Nursing Campaign
    var nursingProgress = new campaignProgress(25000000, 19952881);
    write_campign_progress(nursingProgress);
} else if (current_site == 'pharmacy'){
    //pharmacyProgress is for the goal and progress of the Pharmacy Campaign
    var pharmacyProgress = new campaignProgress(25540000, 14089634);
    write_campign_progress(pharmacyProgress);
} else if (current_site == 'student-aid'){
    //studentProgress is for the goal and progress of the Student Aid:Non-unit donations.
    var studentProgress = new campaignProgress(83000000, 43469001);
    write_campign_progress(studentProgress);
} else if (current_site == 'facultystaff'){
    //wearelevittProgress is for the goal and progress of the staff campaign.
    var wearelevittProgress = new campaignProgress(100, 100);
    write_campign_progress(wearelevittProgress);
}