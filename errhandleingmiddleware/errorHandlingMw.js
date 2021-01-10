module.exports = (err, req, res, next) => {
  err.statusCode = 404;

  if (err) {
    res.status(err.statusCode).json({
      message: "Oop's looks like your lost!😨",
    });
  }
};
