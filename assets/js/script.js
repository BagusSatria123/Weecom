$("document").ready(function() {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal",
    });
    $("#sidebarCollapse").click(function() {
        $("#sidebar").toggleClass("tutup");
        $("#content").toggleClass("layarPenuh");
    });
});