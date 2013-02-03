<script>
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: '<?php echo $CFG->wwwroot.'/theme/fluffybunnyfeet/style/';?>',

  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // Optional callback... myCallback(i, width)
  //callback: myCallback,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px    to 740px  = mobile.min.css',
    '740px  to 960px  = 720.min.css',
    '960px  to 1260px = 960.min.css',
    '1260px to 1580px = 1200.min.css',
    '1580px to 1920px = 1560.min.css',
    '1920px to 2540px = 1920.min.css',
    '2540px           = 2520.min.css'
  ]
};
</script>