<!DOCTYPE html>
<html lang="en">
<head>
  <title>Super customized checkboxes and radio buttons with jQuery</title>
  <meta charset="utf-8">
  <meta content="width=device-width" name="viewport">
  <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  
  <link href="./resources/icheckmaster/css/demo.css?v=0.7" rel="stylesheet">
  
  <link href="./resources/icheckmaster/skins/all.css?v=0.7" rel="stylesheet">
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
  <script src="./resources/icheckmaster/js/jquery.icheck.min.js?v=0.7"></script>

  <script>window.jQuery || document.write('<script src="./resources/icheckmaster/js/jquery.js">\x3C/script>');</script>
  
</head>
<body>
  <div class="layout">
    <div class="header">
      <h1>super customized checkboxes and radio buttons with jQuery</h1>
      <h3>iCheck</h3>
      <strong>@<a href="http://twitter.com/damirfoy/">Damir Foy</a></strong>
    </div>
    <div class="features">
      <div class="arrows">
        <div class="bottom" data-to="demo"></div>
      </div>
      <h2>Plugin features</h2>
      <ul>
        <li>
          <strong>Identical inputs across different browsers and devices</strong> &mdash; both <span class="self" data-to="download">desktop and mobile</span>
        </li>
        <li>
          <strong>Touch devices support</strong> &mdash; iOS, Android, BlackBerry, Windows Phone
        </li>
        <li>
          <strong>Keyboard accessible inputs</strong> &mdash; <span class="mark">Tab</span>, <span class="mark">Spacebar</span>, <span class="mark">Arrow up/down</span> and other shortcuts
        </li>
        <li>
          <strong>Customization freedom</strong> &mdash; use any HTML and CSS to style inputs (try <span class="self" data-to="skins">6 Retina-ready skins</span>)
        </li>
        <li>
          <strong>Lightweight size</strong> &mdash; 1 kb gzipped
        </li>
        <li class="offset">
          <strong class="self" data-to="options">15 options</strong> to customize checkboxes and radio buttons
        </li>
        <li>
          <strong class="self" data-to="callbacks">8 callbacks</strong> to handle changes
        </li>
        <li>
          <strong class="self" data-to="methods">6 methods</strong> to make changes programmatically
        </li>
        <li>
          Saves changes to original inputs, <span class="self" data-to="init">works carefully</span> with any jQuery selector
        </li>
      </ul>
    </div>
    <div class="social clear">
      <ul class="left">
        <li>
          <a href="https://github.com/damirfoy/iCheck/archive/master.zip">Download v0.7</a>
        </li>
        <li>
          <a href="http://github.com/damirfoy/iCheck/">View on GitHub</a>
        </li>
      </ul>
      <ul class="right">
        <li>
          <a href="https://twitter.com/damirfoy" class="twitter-follow-button" data-show-count="false">Follow @damirfoy</a>
        </li>
        <li>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://damirfoy.com/iCheck/" data-text="Super customized checkboxes and radio buttons" data-via="damirfoy" data-count="none" data-hashtags="jQuery">Tweet</a>
        </li>
        <li>
          <a href="http://github.com/damirfoy/iCheck/" class="button-star"><i></i>Star</a>
        </li>
      </ul>
    </div>
    <div class="demo-holder">
      <h2 class="demo-title">Demo</h2>
      <div class="demo">
        <div class="arrows">
          <div class="top" data-to="features"></div>
          <div class="bottom" data-to="skins"></div>
        </div>
        <div class="demo-list clear">
          <ul>
            <li>
              <input tabindex="21" type="checkbox" id="input-1">
              <label for="input-1">Checkbox, <span>#input-1</span></label>
            </li>
            <li>
              <input tabindex="22" type="checkbox" id="input-2" checked>
              <label for="input-2">Checkbox, <span>#input-2</span></label>
            </li>
          </ul>
          <ul>
            <li>
              <input tabindex="23" type="radio" id="input-3" name="demo-radio">
              <label for="input-3">Radio button, <span>#input-3</span></label>
            </li>
            <li>
              <input tabindex="24" type="radio" id="input-4" name="demo-radio" checked>
              <label for="input-4">Radio button, <span>#input-4</span></label>
            </li>
          </ul>
          <script>
          $(document).ready(function(){
            var callbacks_list = $('.demo-callbacks ul');
            function callback_log(id, type) {
              $('.demo-callbacks ul').prepend('<li><span>#' + id + '</span> is ' + type.toLowerCase() + '</li>');
            };
            $('.demo-list input').bind('is.Created is.Clicked is.Changed is.Checked is.Unchecked is.Disabled is.Enabled is.Destroyed', function(event){
              callback_log(this.id, event.namespace);
            }).iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%'
            });
          });
          </script>
        </div>
        <dl class="demo-methods">
          <dt>
            <span class="self do-check">Add <span class="mark">checked</span> state to 1 and 3 inputs</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('#input-1, #input-3').iCheck('check');
</pre>
          </dd>
          <dt>
            <span class="self do-uncheck">Remove <span class="mark">checked</span> state from 1 and 3 inputs</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('#input-1, #input-3').iCheck('uncheck');
</pre>
          </dd>
          <dt>
            <span class="self do-disable">Add <span class="mark">disabled</span> state to 2 and 4 inputs</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('#input-2, #input-4').iCheck('disable');
</pre>
          </dd>
          <dt>
            <span class="self do-enable">Remove <span class="mark">disabled</span> state from 2 and 4 inputs</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('#input-2, #input-4').iCheck('enable');
</pre>
          </dd>
          <dt>
            <span class="self do-destroy">Remove all traces of iCheck</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('input').iCheck('destroy');
</pre>
          </dd>
        </dl>
        <div class="demo-callbacks">
          <h2>Callbacks</h2>
          <ul></ul>
        </div>
      </div>
    </div>
    <div class="skins">
      <h2>Skins</h2>
      <div class="skin skin-minimal">
        <div class="arrows">
          <div class="top" data-to="demo"></div>
          <div class="bottom" data-to="skin-square"></div>
        </div>
        <h3>Minimal skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="1" type="checkbox" id="minimal-checkbox-1">
                  <label for="minimal-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="2" type="checkbox" id="minimal-checkbox-2" checked>
                  <label for="minimal-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="minimal-checkbox-disabled" disabled>
                  <label for="minimal-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="minimal-checkbox-disabled-checked" checked disabled>
                  <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="3" type="radio" id="minimal-radio-1" name="minimal-radio">
                  <label for="minimal-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="4" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                  <label for="minimal-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="minimal-radio-disabled" disabled>
                  <label for="minimal-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="minimal-radio-disabled-checked" checked disabled>
                  <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <div class="colors clear">
                <strong>Color schemes</strong>
                <ul>
                  <li class="active" title="Black"></li>
                  <li class="red" title="Red"></li>
                  <li class="green" title="Green"></li>
                  <li class="blue" title="Blue"></li>
                  <li class="aero" title="Aero"></li>
                  <li class="grey" title="Grey"></li>
                  <li class="orange" title="Orange"></li>
                  <li class="yellow" title="Yellow"></li>
                  <li class="pink" title="Pink"></li>
                  <li class="purple" title="Purple"></li>
                </ul>
              </div>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_minimal static"></div>
                  <div class="state iradio_minimal static"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_minimal hover"></div>
                  <div class="state iradio_minimal hover"></div>
                  Hover
                </li>
                <li>
                  <div class="state icheckbox_minimal checked"></div>
                  <div class="state iradio_minimal checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_minimal disabled"></div>
                  <div class="state iradio_minimal disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_minimal checked disabled"></div>
                  <div class="state iradio_minimal checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox_minimal',
                radioClass: 'iradio_minimal',
                increaseArea: '20%'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <ul class="skin-usage">
              <li>
                Choose a color scheme, there are 10 different styles available:
                <div class="schemes clear">
                  <ul>
                    <li><strong>Black</strong> &mdash; minimal.css</li>
                    <li><strong>Red</strong> &mdash; red.css</li>
                    <li><strong>Green</strong> &mdash; green.css</li>
                    <li><strong>Blue</strong> &mdash; blue.css</li>
                    <li><strong>Aero</strong> &mdash; aero.css</li>
                  </ul>
                  <ul>
                    <li><strong>Grey</strong> &mdash; grey.css</li>
                    <li><strong>Orange</strong> &mdash; orange.css</li>
                    <li><strong>Yellow</strong> &mdash; yellow.css</li>
                    <li><strong>Pink</strong> &mdash; pink.css</li>
                    <li><strong>Purple</strong> &mdash; purple.css</li>
                  </ul>
                </div>
              </li>
              <li>
                Copy <span class="mark">/skins/minimal/</span> folder and <span class="mark">/js/jquery.icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/minimal/color-scheme.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
                <p>Example for a <strong>Red</strong> skin:</p>
<pre class="markup">
&lt;link href="your-path/minimal/red.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio">
&lt;input type="radio" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_minimal',
    radioClass: 'iradio_minimal',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
                <p>For different from black color schemes use this code (example for <strong>Red</strong>):</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass: 'iradio_minimal-red',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ul>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-square">
        <div class="arrows">
          <div class="top" data-to="skin-minimal"></div>
          <div class="bottom" data-to="skin-flat"></div>
        </div>
        <h3>Square skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="5" type="checkbox" id="square-checkbox-1">
                  <label for="square-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="6" type="checkbox" id="square-checkbox-2" checked>
                  <label for="square-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="square-checkbox-disabled" disabled>
                  <label for="square-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="square-checkbox-disabled-checked" checked disabled>
                  <label for="square-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="7" type="radio" id="square-radio-1" name="square-radio">
                  <label for="square-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="8" type="radio" id="square-radio-2" name="square-radio" checked>
                  <label for="square-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="square-radio-disabled" disabled>
                  <label for="square-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="square-radio-disabled-checked" checked disabled>
                  <label for="square-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <div class="colors clear">
                <strong>Color schemes</strong>
                <ul>
                  <li title="Black"></li>
                  <li class="red" title="Red"></li>
                  <li class="green active" title="Green"></li>
                  <li class="blue" title="Blue"></li>
                  <li class="aero" title="Aero"></li>
                  <li class="grey" title="Grey"></li>
                  <li class="orange" title="Orange"></li>
                  <li class="yellow" title="Yellow"></li>
                  <li class="pink" title="Pink"></li>
                  <li class="purple" title="Purple"></li>
                </ul>
              </div>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_square-green static"></div>
                  <div class="state iradio_square-green static"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_square-green hover"></div>
                  <div class="state iradio_square-green hover"></div>
                  Hover
                </li>
                <li>
                  <div class="state icheckbox_square-green checked"></div>
                  <div class="state iradio_square-green checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_square-green disabled"></div>
                  <div class="state iradio_square-green disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_square-green checked disabled"></div>
                  <div class="state iradio_square-green checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-square input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
                increaseArea: '20%'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <ul class="skin-usage">
              <li>
                Choose a color scheme, there are 10 different styles available:
                <div class="schemes clear">
                  <ul>
                    <li><strong>Black</strong> &mdash; square.css</li>
                    <li><strong>Red</strong> &mdash; red.css</li>
                    <li><strong>Green</strong> &mdash; green.css</li>
                    <li><strong>Blue</strong> &mdash; blue.css</li>
                    <li><strong>Aero</strong> &mdash; aero.css</li>
                  </ul>
                  <ul>
                    <li><strong>Grey</strong> &mdash; grey.css</li>
                    <li><strong>Orange</strong> &mdash; orange.css</li>
                    <li><strong>Yellow</strong> &mdash; yellow.css</li>
                    <li><strong>Pink</strong> &mdash; pink.css</li>
                    <li><strong>Purple</strong> &mdash; purple.css</li>
                  </ul>
                </div>
              </li>
              <li>
                Copy <span class="mark">/skins/square/</span> folder and <span class="mark">/js/jquery.icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/square/color-scheme.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
                <p>Example for a <strong>Red</strong> skin:</p>
<pre class="markup">
&lt;link href="your-path/square/red.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio">
&lt;input type="radio" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square',
    radioClass: 'iradio_square',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
                <p>For different from black color schemes use this code (example for <strong>Red</strong>):</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-red',
    radioClass: 'iradio_square-red',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ul>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-flat">
        <div class="arrows">
          <div class="top" data-to="skin-square"></div>
          <div class="bottom" data-to="skin-line"></div>
        </div>
        <h3>Flat skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="9" type="checkbox" id="flat-checkbox-1">
                  <label for="flat-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="10" type="checkbox" id="flat-checkbox-2" checked>
                  <label for="flat-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="flat-checkbox-disabled" disabled>
                  <label for="flat-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="flat-checkbox-disabled-checked" checked disabled>
                  <label for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="11" type="radio" id="flat-radio-1" name="flat-radio">
                  <label for="flat-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="12" type="radio" id="flat-radio-2" name="flat-radio" checked>
                  <label for="flat-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="flat-radio-disabled" disabled>
                  <label for="flat-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="flat-radio-disabled-checked" checked disabled>
                  <label for="flat-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <div class="colors clear">
                <strong>Color schemes</strong>
                <ul>
                  <li title="Black"></li>
                  <li class="red active" title="Red"></li>
                  <li class="green" title="Green"></li>
                  <li class="blue" title="Blue"></li>
                  <li class="aero" title="Aero"></li>
                  <li class="grey" title="Grey"></li>
                  <li class="orange" title="Orange"></li>
                  <li class="yellow" title="Yellow"></li>
                  <li class="pink" title="Pink"></li>
                  <li class="purple" title="Purple"></li>
                </ul>
              </div>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_flat-red static"></div>
                  <div class="state iradio_flat-red static"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_flat-red checked"></div>
                  <div class="state iradio_flat-red checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_flat-red disabled"></div>
                  <div class="state iradio_flat-red disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_flat-red checked disabled"></div>
                  <div class="state iradio_flat-red checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-flat input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <ul class="skin-usage">
              <li>
                Choose a color scheme, there are 10 different styles available:
                <div class="schemes clear">
                  <ul>
                    <li><strong>Black</strong> &mdash; square.css</li>
                    <li><strong>Red</strong> &mdash; red.css</li>
                    <li><strong>Green</strong> &mdash; green.css</li>
                    <li><strong>Blue</strong> &mdash; blue.css</li>
                    <li><strong>Aero</strong> &mdash; aero.css</li>
                  </ul>
                  <ul>
                    <li><strong>Grey</strong> &mdash; grey.css</li>
                    <li><strong>Orange</strong> &mdash; orange.css</li>
                    <li><strong>Yellow</strong> &mdash; yellow.css</li>
                    <li><strong>Pink</strong> &mdash; pink.css</li>
                    <li><strong>Purple</strong> &mdash; purple.css</li>
                  </ul>
                </div>
              </li>
              <li>
                Copy <span class="mark">/skins/flat/</span> folder and <span class="mark">/js/jquery.icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/flat/color-scheme.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
                <p>Example for a <strong>Red</strong> skin:</p>
<pre class="markup">
&lt;link href="your-path/flat/red.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio">
&lt;input type="radio" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat',
    radioClass: 'iradio_flat'
  });
});
&lt;/script>
</pre>
                <p>For different from black color schemes use this code (example for <strong>Red</strong>):</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ul>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-line">
        <div class="arrows">
          <div class="top" data-to="skin-flat"></div>
          <div class="bottom" data-to="skin-polaris"></div>
        </div>
        <h3>Line skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="13" type="checkbox" id="line-checkbox-1">
                  <label for="line-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="14" type="checkbox" id="line-checkbox-2" checked>
                  <label for="line-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="line-checkbox-disabled" disabled>
                  <label for="line-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="line-checkbox-disabled-checked" checked disabled>
                  <label for="line-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="15" type="radio" id="line-radio-1" name="line-radio">
                  <label for="line-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="16" type="radio" id="line-radio-2" name="line-radio" checked>
                  <label for="line-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="line-radio-disabled" disabled>
                  <label for="line-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="line-radio-disabled-checked" checked disabled>
                  <label for="line-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <div class="colors clear">
                <strong>Color schemes</strong>
                <ul>
                  <li title="Black"></li>
                  <li class="red" title="Red"></li>
                  <li class="green" title="Green"></li>
                  <li class="blue active" title="Blue"></li>
                  <li class="aero" title="Aero"></li>
                  <li class="grey" title="Grey"></li>
                  <li class="orange" title="Orange"></li>
                  <li class="yellow" title="Yellow"></li>
                  <li class="pink" title="Pink"></li>
                  <li class="purple" title="Purple"></li>
                </ul>
              </div>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheck_line-blue static">
                    <div class="icheck_line-icon"></div>
                    Normal
                  </div>
                </li>
                <li>
                  <div class="state icheck_line-blue hover">
                    <div class="icheck_line-icon"></div>
                    Hover
                  </div>
                </li>
                <li>
                  <div class="state icheck_line-blue checked">
                    <div class="icheck_line-icon"></div>
                    Checked
                  </div>
                </li>
                <li>
                  <div class="state icheck_line-blue disabled">
                    <div class="icheck_line-icon"></div>
                    Disabled
                  </div>
                </li>
                <li>
                  <div class="state icheck_line-blue checked disabled">
                    <div class="icheck_line-icon"></div>
                    Disabled &amp; checked
                  </div>
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-line input').each(function(){
                var self = $(this),
                  label = self.next(),
                  label_text = label.text();

                label.remove();
                self.iCheck({
                  checkboxClass: 'icheck_line-blue',
                  radioClass: 'icheck_line-blue',
                  insert: '<div class="icheck_line-icon"></div>' + label_text
                });
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <ul class="skin-usage">
              <li>
                Choose a color scheme, there are 10 different styles available:
                <div class="schemes clear">
                  <ul>
                    <li><strong>Black</strong> &mdash; line.css</li>
                    <li><strong>Red</strong> &mdash; red.css</li>
                    <li><strong>Green</strong> &mdash; green.css</li>
                    <li><strong>Blue</strong> &mdash; blue.css</li>
                    <li><strong>Aero</strong> &mdash; aero.css</li>
                  </ul>
                  <ul>
                    <li><strong>Grey</strong> &mdash; grey.css</li>
                    <li><strong>Orange</strong> &mdash; orange.css</li>
                    <li><strong>Yellow</strong> &mdash; yellow.css</li>
                    <li><strong>Pink</strong> &mdash; pink.css</li>
                    <li><strong>Purple</strong> &mdash; purple.css</li>
                  </ul>
                </div>
              </li>
              <li>
                Copy <span class="mark">/skins/line/</span> folder and <span class="mark">/js/jquery.icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/line/color-scheme.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
                  <p>Example for a <strong>Red</strong> skin:</p>
<pre class="markup">
&lt;link href="your-path/line/red.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes, radio buttons and labels to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;label>Checkbox 1&lt;/label>

&lt;input type="checkbox" checked>
&lt;label>Checkbox 2&lt;/label>

&lt;input type="radio">
&lt;label>Radio button 1&lt;/label>

&lt;input type="radio" checked>
&lt;label>Radio button 2&lt;/label>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').each(function(){
    var self = $(this),
      label = self.next(),
      label_text = label.text();

    label.remove();
    self.iCheck({
      checkboxClass: 'icheck_line',
      radioClass: 'icheck_line',
      insert: '&lt;div class="icheck_line-icon">&lt;/div>' + label_text
    });
  });
});
&lt;/script>
</pre>
                <p>For different from black color schemes use this code (example for <strong>Red</strong>):</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').each(function(){
    var self = $(this),
      label = self.next(),
      label_text = label.text();

    label.remove();
    self.iCheck({
      checkboxClass: 'icheck_line-red',
      radioClass: 'icheck_line-red',
      insert: '&lt;div class="icheck_line-icon">&lt;/div>' + label_text
    });
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ul>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-polaris">
        <div class="arrows">
          <div class="top" data-to="skin-line"></div>
          <div class="bottom" data-to="skin-futurico"></div>
        </div>
        <h3>Polaris skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="17" type="checkbox" id="polaris-checkbox-1">
                  <label for="polaris-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="18" type="checkbox" id="polaris-checkbox-2" checked>
                  <label for="polaris-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="polaris-checkbox-disabled" disabled>
                  <label for="polaris-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="polaris-checkbox-disabled-checked" checked disabled>
                  <label for="polaris-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="19" type="radio" id="polaris-radio-1" name="polaris-radio">
                  <label for="polaris-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="20" type="radio" id="polaris-radio-2" name="polaris-radio" checked>
                  <label for="polaris-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="polaris-radio-disabled" disabled>
                  <label for="polaris-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="polaris-radio-disabled-checked" checked disabled>
                  <label for="polaris-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_polaris static"></div>
                  <div class="state iradio_polaris static"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_polaris hover"></div>
                  <div class="state iradio_polaris hover"></div>
                  Hover
                </li>
                <li>
                  <div class="state icheckbox_polaris checked"></div>
                  <div class="state iradio_polaris checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_polaris disabled"></div>
                  <div class="state iradio_polaris disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_polaris checked disabled"></div>
                  <div class="state iradio_polaris checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-polaris input').iCheck({
                checkboxClass: 'icheckbox_polaris',
                radioClass: 'iradio_polaris',
                increaseArea: '-10'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <ul class="skin-usage">
              <li>
                Copy <span class="mark">/skins/polaris/</span> folder and <span class="mark">/js/jquery.icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/polaris/polaris.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio">
&lt;input type="radio" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_polaris',
    radioClass: 'iradio_polaris',
    increaseArea: '-10' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ul>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-futurico">
        <div class="arrows">
          <div class="top" data-to="skin-polaris"></div>
          <div class="bottom" data-to="usage"></div>
        </div>
        <h3>Futurico skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="21" type="checkbox" id="futurico-checkbox-1">
                  <label for="futurico-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="22" type="checkbox" id="futurico-checkbox-2" checked>
                  <label for="futurico-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="futurico-checkbox-disabled" disabled>
                  <label for="futurico-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="futurico-checkbox-disabled-checked" checked disabled>
                  <label for="futurico-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="23" type="radio" id="futurico-radio-1" name="futurico-radio">
                  <label for="futurico-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="24" type="radio" id="futurico-radio-2" name="futurico-radio" checked>
                  <label for="futurico-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="futurico-radio-disabled" disabled>
                  <label for="futurico-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="futurico-radio-disabled-checked" checked disabled>
                  <label for="futurico-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_futurico static"></div>
                  <div class="state iradio_futurico static"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_futurico checked"></div>
                  <div class="state iradio_futurico checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_futurico disabled"></div>
                  <div class="state iradio_futurico disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_futurico checked disabled"></div>
                  <div class="state iradio_futurico checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-futurico input').iCheck({
                checkboxClass: 'icheckbox_futurico',
                radioClass: 'iradio_futurico',
                increaseArea: '20%'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <ul class="skin-usage">
              <li>
                Copy <span class="mark">/skins/futurico/</span> folder and <span class="mark">/js/jquery.icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/futurico/futurico.css" rel="stylesheet">
&lt;script src="your-path/jquery.icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio">
&lt;input type="radio" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_futurico',
    radioClass: 'iradio_futurico',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ul>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skins-info">
        <p>All skins (except Line) are transparent, you may use them on any background.</p>
        <p>Square, Flat, Polaris and Futurico skins are based on <a href="http://designmodo.com/freebies/" target="blank">Designmodo's UI kits</a>.</p>
        <p>Everything is included into <span class="self" data-to="download">download package</span>.</p>
      </div>
    </div>
    <div class="usage">
      <div class="arrows">
        <div class="top" data-to="skin-futurico"></div>
        <div class="bottom" data-to="benefits"></div>
      </div>
      <h2>Simple usage</h2>
      <div class="usage-inner">
        <p>
          iCheck plugin works with checkboxes and radio buttons like a constructor.
          <br><strong>It wraps each input with a div</strong>, which you may customize yourself or use one of the <span class="self" data-to="skins">available skins</span>.
          <br>You may also place inside that div some HTML code or text using <span class="mark">insert</span> option.
        </p>
        <p class="offset">For this HTML:</p>
<pre class="markup">
&lt;input type="checkbox" checked>
&lt;input type="radio" name="some" checked>
&lt;input type="radio" name="some">
</pre>
        <p class="offset">With default options you'll get nearly this:</p>
<pre class="markup">
&lt;div class="icheckbox">
  &lt;input type="checkbox" checked>
&lt;/div>
&lt;div class="iradio">
  &lt;input type="radio" name="some" checked>
&lt;/div>
&lt;div class="iradio">
  &lt;input type="radio" name="some">
&lt;/div>
</pre>
        <p>By default, iCheck doesn't provide any CSS styles for wrapper divs (if you don't use skins).</p>
        <h4 class="options">Options</h4>
        <p>These options are default:</p>
<pre class="markup">
{
  <span class="comment">// 'checkbox' or 'radio' to style only checkboxes or radio buttons, both by default</span>
  handle: '',

  <span class="comment">// class added to customized checkboxes</span>
  checkboxClass: 'icheckbox',

  <span class="comment">// class added to customized radio buttons</span>
  radioClass: 'iradio',

  <span class="comment">// class on checked state</span>
  checkedClass: 'checked',

  <span class="comment">// class on disabled state</span>
  disabledClass: 'disabled',

  <span class="comment">// class on hover state</span>
  hoverClass: 'hover',

  <span class="comment">// class on focus state</span>
  focusClass: 'focus',

  <span class="comment">// class on active state</span>
  activeClass: 'active',

  <span class="comment">// add hoverClass to customized input on label hover and labelHoverClass to label on input hover</span>
  labelHover: true,

  <span class="comment">// class added to label if labelHover set to true</span>
  labelHoverClass: 'hover',

  <span class="comment">// increase clickable area by given % (negative to decrease)</span>
  increaseArea: '',

  <span class="comment">// true to set hand cursor over input</span>
  cursor: false,

  <span class="comment">// set true to inherit input's class name</span>
  inheritClass: false,

  <span class="comment">// if set to true, input's id prefixed with "icheck-" and attached</span>
  inheritID: false,

  <span class="comment">// add HTML code or text inside customized input</span>
  insert: ''
}
</pre>
        <p>You can choose any class names and slyle them as you want.</p>
        <h4 class="init">Initialize</h4>
        <p>iCheck supports any selectors, but handles only checkboxes and radio buttons:</p>
<pre class="markup">
<span class="comment">// customize all inputs (will search for checkboxes and radio buttons)</span>
$('input').iCheck();

<span class="comment">// handle inputs only inside $('.block')</span>
$('.block input').iCheck();

<span class="comment">// handle only checkboxes inside $('.test')</span>
$('.test input').iCheck({
  handle: 'checkbox'
});

<span class="comment">// handle .vote class elements (will search inside the element, if it's not an input)</span>
$('.vote').iCheck();

<span class="comment">// you can also change options after inputs are customized</span>
$('input.some').iCheck({
  <span class="comment">// different options</span>
});
</pre>
        <p>jQuery v1.6 or newer and <span class="mark">jquery.icheck.js</span> (<span class="mark">jquery.icheck.min.js</span> is minified) should be included in your HTML.</p>
        <h4 class="callbacks">Callbacks</h4>
        <table>
          <thead>
            <tr>
              <th>Callback name</th>
              <td>When used</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>is.Clicked</th>
              <td>user clicked on customized input or label</td>
            </tr>
            <tr>
              <th>is.Changed</th>
              <td>input's <span class="mark">checked</span> or <span class="mark">disabled</span> state is changed</td>
            </tr>
            <tr>
              <th>is.Checked</th>
              <td>input's state is changed to <span class="mark">checked</span></td>
            </tr>
            <tr>
              <th>is.Unchecked</th>
              <td><span class="mark">checked</span> state is removed</td>
            </tr>
            <tr>
              <th>is.Disabled</th>
              <td>input's state is changed to <span class="mark">disabled</span></td>
            </tr>
            <tr>
              <th>is.Enabled</th>
              <td><span class="mark">disabled</span> state is removed</td>
            </tr>
            <tr>
              <th>is.Created</th>
              <td>input is just customized</td>
            </tr>
            <tr>
              <th>is.Destroyed</th>
              <td>customization is just removed</td>
            </tr>
          </tbody>
        </table>
        <p>Use <span class="mark">bind</span> to attach them:<p>
<pre class="markup">
$('input').bind('is.Clicked', function(){
  console.log('input is clicked');
});
</pre>
        <p><span class="mark">is.Created</span> callback should be binded before plugin init.</p>
        <h4 class="methods">Methods</h4>
        <p><span class="mark">$('input').iCheck('check');</span> &mdash; change input's state to <span class="mark">checked</span></p>
        <p><span class="mark">$('input').iCheck('uncheck');</span> &mdash; remove <span class="mark">checked</span> state</p>
        <p><span class="mark">$('input').iCheck('disable');</span> &mdash; change input's state to <span class="mark">disabled</span></p>
        <p><span class="mark">$('input').iCheck('enable');</span> &mdash; remove <span class="mark">disabled</span> state</p>
        <p><span class="mark">$('input').iCheck('update');</span> &mdash; apply input changes, which were done outside the plugin</p>
        <p><span class="mark">$('input').iCheck('destroy');</span> &mdash; remove all traces of iCheck</p>
      </div>
    </div>
    <div class="benefits">
      <div class="arrows">
        <div class="top" data-to="usage"></div>
        <div class="bottom" data-to="download"></div>
      </div>
      <h2>Plugin benefits</h2>
      <div class="benefits-inner">
        <p>iCheck is created to avoid routine of reinventing the wheel when working with checkboxes and radio buttons. It provides an expected identical result for the huge number of browsers, devices and their versions. Callbacks and methods can be used to easily handle and make changes at customized inputs.</p>
        <p>There are some CSS3 ways available to style checkboxes and radio buttons, like <a href="http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-easy-css3-checkboxes-and-radio-buttons/" target="blank">this one</a>. You have to know about some disadvantages of similar methods:</p>
        <ul>
          <li>
            &mdash; inputs are keyboard inaccessible, since <span class="mark">display: none</span> or <span class="mark">visibility: hidden</span> used to hide them
          </li>
          <li>
            &mdash; poor browser support
          </li>
          <li>
            &mdash; multiple bugs on mobile devices
          </li>
          <li>
            &mdash; tricky, harder to maintain CSS code
          </li>
          <li>
            &mdash; JavaScript is still needed to fix specific issues
          </li>
        </ul>
        <p>While CSS3 method is quite limited solution, iCheck is made to be an everyday replacement covering most of the tasks.</p>
      </div>
    </div>
    <div class="browsers">
      <h2>Browser support</h2>
      <div class="browsers-inner">
        <p>iCheck is verified to work in Internet Explorer 7+ (works in IE6 if you don't use CSS class chaining), Firefox 2+, Google Chrome, Safari 3+ and Opera 9+ browsers. Should also work in many others.</p>
        <p>Mobile browsers (like Opera mini, Chrome mobile, Safari mobile and others) are also supported. Tested on iOS, Android, BlackBerry and Windows Phone devices.</p>
      </div>
    </div>
    <ul class="actions clear">
      <li class="download">
        <a href="https://github.com/damirfoy/iCheck/archive/master.zip">Download plugin</a>
      </li>
      <li class="fork">
        <a href="http://github.com/damirfoy/iCheck/">View on GitHub</a>
      </li>
    </ul>
    <div class="license">iCheck jQuery plugin is released under <a href="http://en.wikipedia.org/wiki/MIT_License" target="blank">MIT License</a>. Feel free to use it in personal and commercial projects.</div>
  </div>
  <div class="footer">
    <div class="footer-inner">
      <div class="design">
        Design is based on <a href="http://designmodo.com/square/" target="blank">Square UI kit</a>
      </div>
      <ul>
        <li>
          <a href="http://github.com/damirfoy/iCheck/" class="button-star"><i></i>Star</a>
        </li>
        <li>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://damirfoy.com/iCheck/" data-text="Super customized checkboxes and radio buttons" data-via="damirfoy" data-count="none" data-hashtags="jQuery">Tweet</a>
        </li>
        <li>
          <a href="https://twitter.com/damirfoy" class="twitter-follow-button" data-show-count="false">Follow @damirfoy</a>
        </li>
      </ul>
      <div class="code">
        Crafted by <a href="http://damirfoy.com/">Damir Foy</a>
      </div>
    </div>
  </div>
  <script src="./js/demo.js?v=0.7"></script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>