(function () {
  
$.getJSON('resources.json')
  .done(loadResources)
  .fail(errorMessage);

function createTable(category, object) {
  var name = (object.Name !== "") ?  "<tr><td><strong>" + object.Name + "</strong></td></tr>" : "";
  var website = (object.website !== "") ? "<tr><td><a href='" + object.Website + "'>" + object.Website + "</a></td></tr>" : "";
  var mailing = (object.MailingAddress !== "") ? "<tr><td>" + object.MailingAddress + "</td></tr>" : "";
  var phone = (object.Phone !== "") ? "<tr><td>" + object.Phone + "</td></tr>" : "";
  var email = (object.Email !== "") ? "<tr><td><a href='mailto:" + object.Email + "''>" + object.Email + "</a></td></tr>" : "";
  var services = (object.Services !== "") ? "<tr><td>" + object.Services + "</td></tr>" : "";
  var info = name + website + mailing + phone + email + services;
  $(category).append("<table class='table table-bordered table-hover'>" + info + "<tbody></tbody></table>");
  };

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
  $("#info").append("<p class='text-danger'>There's been an error retrieving the resource guide. Please refresh and try again.</p>");
};

$(".toggle").hide();

$("h2").on("click", function() {
  $(this).parent("div").find(".toggle").toggle();
});

})();