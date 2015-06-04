(function () {
  
$.getJSON('resources.json')
  .done(loadResources)
  .fail(errorMessage);

function createTable(category, tables) {
    console.log(tables);
    for (var i = 0, max = tables.length; i < max; i++) {
        var info = "<tr><td>" + tables[i].Name + "</td></tr><tr><td>" + tables[i].Website + "</td></tr><tr><td>" + tables[i].MailingAddress + "</td></tr><tr><td>" + tables[i].Phone + "</td></tr><tr><td>" + tables[i].Email + "</td></tr><tr><td>" + tables[i].Services + "</td></tr>";
        var this_table = $(category).append("<table class='table table-bordered table-hover'>" + info + "<tbody></tbody></table>");
        }
}

function loadResources(data) {
    var ArtTables = [];
    var HealthTables = [];
    var HotlineTables = [];
    var CounselorsTables = [];
    var ChurchesTables = [];
    var SportsTables = [];
    var StudentTables = [];
    var SupportTables = [];
    for(var i = 0, max = data.length; i < max; i++) {
    var obj = data[i];
    var obj2 = obj;
    if(obj.Category === "ArtMusicFilmShowings") {
            ArtTables.push(obj2);
        }
        else if(obj.Category === "HealthcareAssistance") {
            HealthTables.push(obj2);
        }
        else if(obj.Category === "Hotline") {
            HotlineTables.push(obj2);
        }
        else if(obj.Category === "MentalHealthCounselor") {
            CounselorsTables.push(obj2);
        }
        else if(obj.Category === "Church") {
            ChurchesTables.push(obj2);
        }
        else if(obj.Category === "SportsRecreation") {
            SportsTables.push(obj2);
        }
        else if(obj.Category === "StudentGroup") {
            StudentTables.push(obj2);
        }
        else if(obj.Category === "SupportGroup") {
            SupportTables.push(obj2);
        }
  }
  createTable("#art", ArtTables);
  createTable("#health", HealthTables);
  createTable("#hotlines", HotlineTables);
  createTable("#counselors", CounselorsTables);
  createTable("#churches", ChurchesTables);
  createTable("#sports", SportsTables);
  createTable("#student", StudentTables);
  createTable("#support", SupportTables);

};

function errorMessage() {
  $("#info").append("<p class='text-danger'>There's been an error retrieving the resource guide. Please refresh and try again.</p>");
};

$(".toggle").hide();

$("h2").on("click", function() {
  $(this).parent("div").find(".toggle").toggle();
});

})();