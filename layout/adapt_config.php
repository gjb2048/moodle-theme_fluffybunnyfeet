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
    '0px    to 740px  = mobile_16.css',
    '740px  to 960px  = 720_16.css',
    '960px  to 1200px = 960_16.css',
    '1200px to 1520px = 1200_16.css',
    '1520px to 1920px = 1520_16.css',
    '1920px to 2560px = 1920_16.css',
    '2560px           = 2560_16.css'
  ]
};
</script>