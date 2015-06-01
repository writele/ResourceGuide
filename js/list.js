(function () {
  
$.getJSON('resources.json')
  .done(loadResources)
  .fail(errorMessage);

function createTable(category, object) {
$(category).append("<table></table>")
  .append("<tr><td>" + object.Name + "</td></tr>")
  .append("<tr><td>" + object.Website + "</td></tr>")
  .append("<tr><td>" + object.MailingAddress + "</td></tr>")
  .append("<tr><td>" + object.Phone + "</td>" + "<td>" + object.Email + "</tr>")
  .append("<tr><td>" + object.Services + "</td></tr>")
}

function loadResources(data) {
  for(var i = 0, max = data.length; i < max; i++) {
    var obj = data[i];
    if(obj.Category === "ArtMusicFilmShowings") {
    createTable("#art", obj);
    }
    else if(obj.Category === "HealthcareAssistance") {
    createTable("#health", obj);
    }
    else if(obj.Category === "Hotline") {
    createTable("#hotlines", obj);
    }
    else if(obj.Category === "MentalHealthCounselor") {
    createTable("#counselors", obj);
    }
    else if(obj.Category === "Church") {
    createTable("#churches", obj);
    }
    else if(obj.Category === "SportsRecreation") {
    createTable("#sports", obj);
    }
    else if(obj.Category === "StudentGroup") {
    createTable("#student", obj);
    }
    else if(obj.Category === "SupportGroup") {
    createTable("#support", obj);
    }
  }
};

function errorMessage() {
  $("#info").append("<p class='errorMsg'>There's been an error retrieving the resource guide. Please refresh and try again.</p>");
};

$(".toggle").hide();

$("h2").on("click", function() {
  $(this).parent("div").find(".toggle").toggle();
});

})();