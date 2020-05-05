$(function() {
    $(".btn2").click(function(e) {
        var self = $(this);
        var par = self.parent();
        var target = par.prev(".infos").find(".read-more");
        if (self.data("action") === undefined) {
            self.data({
                action: "more",
                height: target.css("height").slice(0,-2)
            });
        }
        if (self.data("action") === "more") {
            console.log("Expand to " + target[0].scrollHeight);
            target.animate({
                height: target[0].scrollHeight
            }, 600);
            self.text("Read Less...");
            self.data("action", "less");
        } else {
            console.log("Shrink to " + self.data("height"));
            target.animate({
                height: self.data("height")
            }, 600);
            self.text("Read More...");
            self.data("action", "more");
        }
    });
});
