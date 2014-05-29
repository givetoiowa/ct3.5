exports.all = function(req, res) {
    var path = req.params[0];
    res.render(path, {
        title: "U of Iowa",
        reload: true
    });
};