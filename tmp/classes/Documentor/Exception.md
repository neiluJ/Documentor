<br />
<font size='1'><table class='xdebug-error' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: Invalid argument supplied for foreach() in /home/neiluj/www/Documentor/Resolver.php on line <i>91</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>326704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>376516</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generate(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>16</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>6.4298</td><td bgcolor='#eeeeec' align='right'>1090516</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generateClassDoc( <span title='class Documentor\Reflection\ReflectionClass { protected $methods = array (); protected $properties = array (); protected $constants = array (); protected $abstract = FALSE; protected $final = FALSE; protected $implements = array (); protected $parentClass = &apos;\\RuntimeException&apos;; protected $interface = FALSE; protected $startLine = 44; protected $endLine = 46; protected $name = &apos;Documentor\\Exception&apos;; protected $fileName = &apos;/home/neiluj/www/Documentor/Exception.php&apos;; protected $namespaceName = &apos;Documentor&apos;; protected $docComment = class Documentor\DocComment { protected $block = &apos;/**\n * Base exception class\n *\n * @category Exceptions\n * @package  Documentor\n * @author   Julien Ballestracci &lt;julien@nitronet.org&gt;\n * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License\n * @link     http://github.com/neiluj/Documentor\n */&apos;; protected $startLine = 35; protected $endLine = 43; protected $comment = NULL } }'><font color='#8f5902'>object(Documentor\Reflection\ReflectionClass)[397]</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>35</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>6.4300</td><td bgcolor='#eeeeec' align='right'>1091996</td><td bgcolor='#eeeeec'>Documentor\ThemeResource->execute(  )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>88</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>6.4300</td><td bgcolor='#eeeeec' align='right'>1133740</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml'</font> )</td><td title='/home/neiluj/www/Documentor/ThemeResource.php' bgcolor='#eeeeec'>../ThemeResource.php<b>:</b>106</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>6.4301</td><td bgcolor='#eeeeec' align='right'>1134380</td><td bgcolor='#eeeeec'>Documentor\Resolver->heritedMethods(  )</td><td title='/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml' bgcolor='#eeeeec'>../class.phtml<b>:</b>17</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>6.4301</td><td bgcolor='#eeeeec' align='right'>1134708</td><td bgcolor='#eeeeec'>Documentor\Resolver->getParentMethods( <span title='&apos;\\RuntimeException&apos;'><font color='#cc0000'>string(17)</font></span>, <span title='array ()'><font color='#ce5c00'>array(0)</font></span> )</td><td title='/home/neiluj/www/Documentor/Resolver.php' bgcolor='#eeeeec'>../Resolver.php<b>:</b>120</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>6.4302</td><td bgcolor='#eeeeec' align='right'>1134708</td><td bgcolor='#eeeeec'>Documentor\Resolver->resolveClassName( <span title='&apos;\\RuntimeException&apos;'><font color='#cc0000'>string(17)</font></span> )</td><td title='/home/neiluj/www/Documentor/Resolver.php' bgcolor='#eeeeec'>../Resolver.php<b>:</b>127</td></tr>
<tr><th align='left' colspan='5' bgcolor='#e9b96e'>Variables in local scope (#8)</th></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$className&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'\RuntimeException'</font> <i>(length=17)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$classes&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'>
<b>array</b>
  'Composer\Autoload\ClassLoader' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/vendor/composer/ClassLoader.php'</font> <i>(length=59)</i>
  'Documentor\AbstractParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractParser.php'</font> <i>(length=46)</i>
  'Documentor\AbstractReflector' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractReflector.php'</font> <i>(length=49)</i>
  'Documentor\AbstractTheme' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractTheme.php'</font> <i>(length=45)</i>
  'Documentor\Directory' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Directory.php'</font> <i>(length=41)</i>
  'Documentor\DocComment' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/DocComment.php'</font> <i>(length=42)</i>
  'Documentor\Exception' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
  'Documentor\Interpret' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Interpret.php'</font> <i>(length=41)</i>
  'Documentor\Parsers\AttributeParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/AttributeParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\ClassParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ClassParser.php'</font> <i>(length=51)</i>
  'Documentor\Parsers\ConstantParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ConstantParser.php'</font> <i>(length=54)</i>
  'Documentor\Parsers\ConstantParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/ConstantParserTest.php'</font> <i>(length=64)</i>
  'Documentor\Parsers\DocCommentParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/DocCommentParser.php'</font> <i>(length=56)</i>
  'Documentor\Parsers\DocCommentParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/DocCommentParserTest.php'</font> <i>(length=66)</i>
  'Documentor\Parsers\FunctionParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/FunctionParser.php'</font> <i>(length=54)</i>
  'Documentor\Parsers\FunctionParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/FunctionParserTest.php'</font> <i>(length=64)</i>
  'Documentor\Parsers\ImportsParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ImportsParser.php'</font> <i>(length=53)</i>
  'Documentor\Parsers\ImportsParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/ImportsParserTest.php'</font> <i>(length=63)</i>
  'Documentor\Parsers\InterfaceParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/InterfaceParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\MethodParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/MethodParser.php'</font> <i>(length=52)</i>
  'Documentor\Parsers\MethodParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/MethodParserTest.php'</font> <i>(length=62)</i>
  'Documentor\Parsers\NamespaceParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/NamespaceParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\NamespaceParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/NamespaceParserTest.php'</font> <i>(length=65)</i>
  'Documentor\Parsers\PhpFileParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/PhpFileParser.php'</font> <i>(length=53)</i>
  'Documentor\Project' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Project.php'</font> <i>(length=39)</i>
  'Documentor\Reflection\ReflectionClass' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionClass.php'</font> <i>(length=58)</i>
  'Documentor\Reflection\ReflectionClassTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Reflection/ReflectionClassTest.php'</font> <i>(length=68)</i>
  'Documentor\Reflection\ReflectionConstant' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionConstant.php'</font> <i>(length=61)</i>
  'Documentor\Reflection\ReflectionConstantTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Reflection/ReflectionConstantTest.php'</font> <i>(length=71)</i>
  'Documentor\Reflection\ReflectionFunction' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionFunction.php'</font> <i>(length=61)</i>
  'Documentor\Reflection\ReflectionMethod' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php'</font> <i>(length=59)</i>
  'Documentor\Reflection\ReflectionParameter' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionParameter.php'</font> <i>(length=62)</i>
  'Documentor\Reflection\ReflectionProperty' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionProperty.php'</font> <i>(length=61)</i>
  'Documentor\Resolver' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Resolver.php'</font> <i>(length=40)</i>
  'Documentor\Tags\GenericTag' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tags/GenericTag.php'</font> <i>(length=47)</i>
  'Documentor\Tags\ParameterTag' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tags/ParameterTag.php'</font> <i>(length=49)</i>
  'Documentor\ThemeResource' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/ThemeResource.php'</font> <i>(length=45)</i>
  'Documentor\ThemeResourceTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/ThemeResourceTest.php'</font> <i>(length=55)</i>
  'Documentor\Themes\Markdown' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Themes/Markdown.php'</font> <i>(length=47)</i>
  'TestNamespace\TestClass' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Resources/TestClass.php'</font> <i>(length=57)</i>
  'TestNamespace\TestClassTwo' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Resources/TestClass.php'</font> <i>(length=57)</i>
  '\ComposerAutoloaderInit' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/vendor/composer/autoload_real.php'</font> <i>(length=61)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$file&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$import&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$imports&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><font color='#3465a4'>null</font>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$importsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'>
<b>object</b>(<i>Documentor\Parsers\ImportsParser</i>)[<i>237</i>]
  <i>protected</i> 'filePath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
  <i>protected</i> 'parsers' <font color='#888a85'>=&gt;</font> 
    <b>array</b>
      <i><font color='#888a85'>empty</font></i>
  <i>protected</i> 'results' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
  <i>protected</i> 'tokens' <font color='#888a85'>=&gt;</font> 
    <b>array</b>
      0 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>368</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;?php&#10;'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1</font>
      1 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>367</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/**&#10; * Documentor&#10; *&#10; * Copyright (c) 2011-2012, Julien Ballestracci &lt;julien@nitronet.org&gt;.&#10; * All rights reserved.&#10; *&#10; * For the full copyright and license information, please view the LICENSE&#10; * file that was distributed with this source code.&#10; *&#10; * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS&#10; * &quot;AS IS&quot; AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT&#10; * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS&#10; * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVEN'...</font> <i>(length=1365)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
      2 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>32</font>
      3 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>377</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'namespace'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      4 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      5 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Documentor'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      6 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      7 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      8 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>367</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/**&#10; * Base exception class&#10; *&#10; * @category Exceptions&#10; * @package  Documentor&#10; * @author   Julien Ballestracci &lt;julien@nitronet.org&gt;&#10; * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License&#10; * @link     http://github.com/neiluj/Documentor&#10; */'</font> <i>(length=263)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>35</font>
      9 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      10 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>353</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'class'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      11 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      12 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Exception'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      13 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      14 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>355</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'extends'</font> <i>(length=7)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      15 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      16 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>380</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'\'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      17 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'RuntimeException'</font> <i>(length=16)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      18 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      19 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      20 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      21 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'}'</font> <i>(length=1)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$ns&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$nsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
</table></font>
# Class: [Documentor](../../namespaces/Documentor.md) \ [Exception](../../classes/Documentor/Exception.md) extends <br />
<font size='1'><table class='xdebug-error' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: Invalid argument supplied for foreach() in /home/neiluj/www/Documentor/Resolver.php on line <i>91</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>326704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>376516</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generate(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>16</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>6.4298</td><td bgcolor='#eeeeec' align='right'>1090516</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generateClassDoc( <span title='class Documentor\Reflection\ReflectionClass { protected $methods = array (); protected $properties = array (); protected $constants = array (); protected $abstract = FALSE; protected $final = FALSE; protected $implements = array (); protected $parentClass = &apos;\\RuntimeException&apos;; protected $interface = FALSE; protected $startLine = 44; protected $endLine = 46; protected $name = &apos;Documentor\\Exception&apos;; protected $fileName = &apos;/home/neiluj/www/Documentor/Exception.php&apos;; protected $namespaceName = &apos;Documentor&apos;; protected $docComment = class Documentor\DocComment { protected $block = &apos;/**\n * Base exception class\n *\n * @category Exceptions\n * @package  Documentor\n * @author   Julien Ballestracci &lt;julien@nitronet.org&gt;\n * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License\n * @link     http://github.com/neiluj/Documentor\n */&apos;; protected $startLine = 35; protected $endLine = 43; protected $comment = NULL } }'><font color='#8f5902'>object(Documentor\Reflection\ReflectionClass)[397]</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>35</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>6.4300</td><td bgcolor='#eeeeec' align='right'>1091996</td><td bgcolor='#eeeeec'>Documentor\ThemeResource->execute(  )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>88</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>6.4300</td><td bgcolor='#eeeeec' align='right'>1133740</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml'</font> )</td><td title='/home/neiluj/www/Documentor/ThemeResource.php' bgcolor='#eeeeec'>../ThemeResource.php<b>:</b>106</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>6.4318</td><td bgcolor='#eeeeec' align='right'>1135004</td><td bgcolor='#eeeeec'>displayLinkOrClassname( <span title='class Documentor\ThemeResource { protected $type = &apos;class&apos;; protected $project = class Documentor\Project { protected $name = &apos;Documentor&apos;; protected $directories = array (...); protected $version = &apos;1.0&apos;; protected $namespaces = array (...); protected $classes = array (...); protected $functions = array (...); protected $indexed = TRUE; protected $hashes = array (...) }; protected $resolver = class Documentor\Resolver { protected $project = class Documentor\Project { ... }; protected $reflector = class Documentor\Reflection\ReflectionClass { ... } }; protected $reflector = class Documentor\Reflection\ReflectionClass { protected $methods = array (...); protected $properties = array (...); protected $constants = array (...); protected $abstract = FALSE; protected $final = FALSE; protected $implements = array (...); protected $parentClass = &apos;\\RuntimeException&apos;; protected $interface = FALSE; protected $startLine = 44; protected $endLine = 46; protected $name = &apos;Documentor\\Exception&apos;; protected $fileName = &apos;/home/neiluj/www/Documentor/Exception.php&apos;; protected $namespaceName = &apos;Documentor&apos;; protected $docComment = class Documentor\DocComment { ... } }; protected $resource = &apos;/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml&apos;; protected $options = array () }'><font color='#8f5902'>object(Documentor\ThemeResource)[277]</font></span>, <span title='&apos;\\RuntimeException&apos;'><font color='#cc0000'>string(17)</font></span>, <span title='&apos;Documentor\\Exception&apos;'><font color='#cc0000'>string(20)</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml' bgcolor='#eeeeec'>../class.phtml<b>:</b>21</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>6.4319</td><td bgcolor='#eeeeec' align='right'>1135004</td><td bgcolor='#eeeeec'>Documentor\Resolver->resolveClassName( <span title='&apos;\\RuntimeException&apos;'><font color='#cc0000'>string(17)</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Resources/markdown/macros.inc.php' bgcolor='#eeeeec'>../macros.inc.php<b>:</b>7</td></tr>
<tr><th align='left' colspan='5' bgcolor='#e9b96e'>Variables in local scope (#7)</th></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$className&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'\RuntimeException'</font> <i>(length=17)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$classes&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'>
<b>array</b>
  'Composer\Autoload\ClassLoader' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/vendor/composer/ClassLoader.php'</font> <i>(length=59)</i>
  'Documentor\AbstractParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractParser.php'</font> <i>(length=46)</i>
  'Documentor\AbstractReflector' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractReflector.php'</font> <i>(length=49)</i>
  'Documentor\AbstractTheme' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractTheme.php'</font> <i>(length=45)</i>
  'Documentor\Directory' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Directory.php'</font> <i>(length=41)</i>
  'Documentor\DocComment' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/DocComment.php'</font> <i>(length=42)</i>
  'Documentor\Exception' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
  'Documentor\Interpret' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Interpret.php'</font> <i>(length=41)</i>
  'Documentor\Parsers\AttributeParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/AttributeParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\ClassParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ClassParser.php'</font> <i>(length=51)</i>
  'Documentor\Parsers\ConstantParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ConstantParser.php'</font> <i>(length=54)</i>
  'Documentor\Parsers\ConstantParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/ConstantParserTest.php'</font> <i>(length=64)</i>
  'Documentor\Parsers\DocCommentParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/DocCommentParser.php'</font> <i>(length=56)</i>
  'Documentor\Parsers\DocCommentParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/DocCommentParserTest.php'</font> <i>(length=66)</i>
  'Documentor\Parsers\FunctionParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/FunctionParser.php'</font> <i>(length=54)</i>
  'Documentor\Parsers\FunctionParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/FunctionParserTest.php'</font> <i>(length=64)</i>
  'Documentor\Parsers\ImportsParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ImportsParser.php'</font> <i>(length=53)</i>
  'Documentor\Parsers\ImportsParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/ImportsParserTest.php'</font> <i>(length=63)</i>
  'Documentor\Parsers\InterfaceParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/InterfaceParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\MethodParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/MethodParser.php'</font> <i>(length=52)</i>
  'Documentor\Parsers\MethodParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/MethodParserTest.php'</font> <i>(length=62)</i>
  'Documentor\Parsers\NamespaceParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/NamespaceParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\NamespaceParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/NamespaceParserTest.php'</font> <i>(length=65)</i>
  'Documentor\Parsers\PhpFileParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/PhpFileParser.php'</font> <i>(length=53)</i>
  'Documentor\Project' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Project.php'</font> <i>(length=39)</i>
  'Documentor\Reflection\ReflectionClass' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionClass.php'</font> <i>(length=58)</i>
  'Documentor\Reflection\ReflectionClassTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Reflection/ReflectionClassTest.php'</font> <i>(length=68)</i>
  'Documentor\Reflection\ReflectionConstant' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionConstant.php'</font> <i>(length=61)</i>
  'Documentor\Reflection\ReflectionConstantTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Reflection/ReflectionConstantTest.php'</font> <i>(length=71)</i>
  'Documentor\Reflection\ReflectionFunction' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionFunction.php'</font> <i>(length=61)</i>
  'Documentor\Reflection\ReflectionMethod' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php'</font> <i>(length=59)</i>
  'Documentor\Reflection\ReflectionParameter' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionParameter.php'</font> <i>(length=62)</i>
  'Documentor\Reflection\ReflectionProperty' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionProperty.php'</font> <i>(length=61)</i>
  'Documentor\Resolver' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Resolver.php'</font> <i>(length=40)</i>
  'Documentor\Tags\GenericTag' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tags/GenericTag.php'</font> <i>(length=47)</i>
  'Documentor\Tags\ParameterTag' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tags/ParameterTag.php'</font> <i>(length=49)</i>
  'Documentor\ThemeResource' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/ThemeResource.php'</font> <i>(length=45)</i>
  'Documentor\ThemeResourceTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/ThemeResourceTest.php'</font> <i>(length=55)</i>
  'Documentor\Themes\Markdown' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Themes/Markdown.php'</font> <i>(length=47)</i>
  'TestNamespace\TestClass' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Resources/TestClass.php'</font> <i>(length=57)</i>
  'TestNamespace\TestClassTwo' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Resources/TestClass.php'</font> <i>(length=57)</i>
  '\ComposerAutoloaderInit' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/vendor/composer/autoload_real.php'</font> <i>(length=61)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$file&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$import&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$imports&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><font color='#3465a4'>null</font>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$importsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'>
<b>object</b>(<i>Documentor\Parsers\ImportsParser</i>)[<i>242</i>]
  <i>protected</i> 'filePath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
  <i>protected</i> 'parsers' <font color='#888a85'>=&gt;</font> 
    <b>array</b>
      <i><font color='#888a85'>empty</font></i>
  <i>protected</i> 'results' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
  <i>protected</i> 'tokens' <font color='#888a85'>=&gt;</font> 
    <b>array</b>
      0 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>368</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;?php&#10;'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1</font>
      1 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>367</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/**&#10; * Documentor&#10; *&#10; * Copyright (c) 2011-2012, Julien Ballestracci &lt;julien@nitronet.org&gt;.&#10; * All rights reserved.&#10; *&#10; * For the full copyright and license information, please view the LICENSE&#10; * file that was distributed with this source code.&#10; *&#10; * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS&#10; * &quot;AS IS&quot; AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT&#10; * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS&#10; * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVEN'...</font> <i>(length=1365)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
      2 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>32</font>
      3 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>377</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'namespace'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      4 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      5 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Documentor'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      6 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      7 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      8 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>367</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/**&#10; * Base exception class&#10; *&#10; * @category Exceptions&#10; * @package  Documentor&#10; * @author   Julien Ballestracci &lt;julien@nitronet.org&gt;&#10; * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License&#10; * @link     http://github.com/neiluj/Documentor&#10; */'</font> <i>(length=263)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>35</font>
      9 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      10 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>353</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'class'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      11 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      12 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Exception'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      13 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      14 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>355</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'extends'</font> <i>(length=7)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      15 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      16 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>380</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'\'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      17 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'RuntimeException'</font> <i>(length=16)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      18 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      19 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      20 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      21 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'}'</font> <i>(length=1)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$ns&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$nsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
</table></font>
Documentor\\RuntimeException

Base exception class



## Methods Summary

* Herited from <br />
<font size='1'><table class='xdebug-error' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: Invalid argument supplied for foreach() in /home/neiluj/www/Documentor/Resolver.php on line <i>91</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>326704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>376516</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generate(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>16</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>6.4298</td><td bgcolor='#eeeeec' align='right'>1090516</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generateClassDoc( <span title='class Documentor\Reflection\ReflectionClass { protected $methods = array (); protected $properties = array (); protected $constants = array (); protected $abstract = FALSE; protected $final = FALSE; protected $implements = array (); protected $parentClass = &apos;\\RuntimeException&apos;; protected $interface = FALSE; protected $startLine = 44; protected $endLine = 46; protected $name = &apos;Documentor\\Exception&apos;; protected $fileName = &apos;/home/neiluj/www/Documentor/Exception.php&apos;; protected $namespaceName = &apos;Documentor&apos;; protected $docComment = class Documentor\DocComment { protected $block = &apos;/**\n * Base exception class\n *\n * @category Exceptions\n * @package  Documentor\n * @author   Julien Ballestracci &lt;julien@nitronet.org&gt;\n * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License\n * @link     http://github.com/neiluj/Documentor\n */&apos;; protected $startLine = 35; protected $endLine = 43; protected $comment = &apos;Base exception class\n\n&apos; } }'><font color='#8f5902'>object(Documentor\Reflection\ReflectionClass)[397]</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>35</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>6.4300</td><td bgcolor='#eeeeec' align='right'>1091996</td><td bgcolor='#eeeeec'>Documentor\ThemeResource->execute(  )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>88</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>6.4300</td><td bgcolor='#eeeeec' align='right'>1133740</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml'</font> )</td><td title='/home/neiluj/www/Documentor/ThemeResource.php' bgcolor='#eeeeec'>../ThemeResource.php<b>:</b>106</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>6.4335</td><td bgcolor='#eeeeec' align='right'>1145340</td><td bgcolor='#eeeeec'>displayLinkOrClassname( <span title='class Documentor\ThemeResource { protected $type = &apos;class&apos;; protected $project = class Documentor\Project { protected $name = &apos;Documentor&apos;; protected $directories = array (...); protected $version = &apos;1.0&apos;; protected $namespaces = array (...); protected $classes = array (...); protected $functions = array (...); protected $indexed = TRUE; protected $hashes = array (...) }; protected $resolver = class Documentor\Resolver { protected $project = class Documentor\Project { ... }; protected $reflector = class Documentor\Reflection\ReflectionClass { ... } }; protected $reflector = class Documentor\Reflection\ReflectionClass { protected $methods = array (...); protected $properties = array (...); protected $constants = array (...); protected $abstract = FALSE; protected $final = FALSE; protected $implements = array (...); protected $parentClass = &apos;\\RuntimeException&apos;; protected $interface = FALSE; protected $startLine = 44; protected $endLine = 46; protected $name = &apos;Documentor\\Exception&apos;; protected $fileName = &apos;/home/neiluj/www/Documentor/Exception.php&apos;; protected $namespaceName = &apos;Documentor&apos;; protected $docComment = class Documentor\DocComment { ... } }; protected $resource = &apos;/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml&apos;; protected $options = array () }'><font color='#8f5902'>object(Documentor\ThemeResource)[277]</font></span>, <span title='&apos;Documentor\\\\RuntimeException&apos;'><font color='#cc0000'>string(28)</font></span>, <span title='&apos;Documentor\\Exception&apos;'><font color='#cc0000'>string(20)</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml' bgcolor='#eeeeec'>../class.phtml<b>:</b>50</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>6.4335</td><td bgcolor='#eeeeec' align='right'>1145340</td><td bgcolor='#eeeeec'>Documentor\Resolver->resolveClassName( <span title='&apos;Documentor\\\\RuntimeException&apos;'><font color='#cc0000'>string(28)</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Resources/markdown/macros.inc.php' bgcolor='#eeeeec'>../macros.inc.php<b>:</b>7</td></tr>
<tr><th align='left' colspan='5' bgcolor='#e9b96e'>Variables in local scope (#7)</th></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$className&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'Documentor\\RuntimeException'</font> <i>(length=28)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$classes&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'>
<b>array</b>
  'Composer\Autoload\ClassLoader' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/vendor/composer/ClassLoader.php'</font> <i>(length=59)</i>
  'Documentor\AbstractParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractParser.php'</font> <i>(length=46)</i>
  'Documentor\AbstractReflector' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractReflector.php'</font> <i>(length=49)</i>
  'Documentor\AbstractTheme' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/AbstractTheme.php'</font> <i>(length=45)</i>
  'Documentor\Directory' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Directory.php'</font> <i>(length=41)</i>
  'Documentor\DocComment' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/DocComment.php'</font> <i>(length=42)</i>
  'Documentor\Exception' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
  'Documentor\Interpret' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Interpret.php'</font> <i>(length=41)</i>
  'Documentor\Parsers\AttributeParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/AttributeParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\ClassParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ClassParser.php'</font> <i>(length=51)</i>
  'Documentor\Parsers\ConstantParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ConstantParser.php'</font> <i>(length=54)</i>
  'Documentor\Parsers\ConstantParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/ConstantParserTest.php'</font> <i>(length=64)</i>
  'Documentor\Parsers\DocCommentParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/DocCommentParser.php'</font> <i>(length=56)</i>
  'Documentor\Parsers\DocCommentParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/DocCommentParserTest.php'</font> <i>(length=66)</i>
  'Documentor\Parsers\FunctionParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/FunctionParser.php'</font> <i>(length=54)</i>
  'Documentor\Parsers\FunctionParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/FunctionParserTest.php'</font> <i>(length=64)</i>
  'Documentor\Parsers\ImportsParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/ImportsParser.php'</font> <i>(length=53)</i>
  'Documentor\Parsers\ImportsParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/ImportsParserTest.php'</font> <i>(length=63)</i>
  'Documentor\Parsers\InterfaceParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/InterfaceParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\MethodParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/MethodParser.php'</font> <i>(length=52)</i>
  'Documentor\Parsers\MethodParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/MethodParserTest.php'</font> <i>(length=62)</i>
  'Documentor\Parsers\NamespaceParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/NamespaceParser.php'</font> <i>(length=55)</i>
  'Documentor\Parsers\NamespaceParserTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Parsers/NamespaceParserTest.php'</font> <i>(length=65)</i>
  'Documentor\Parsers\PhpFileParser' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Parsers/PhpFileParser.php'</font> <i>(length=53)</i>
  'Documentor\Project' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Project.php'</font> <i>(length=39)</i>
  'Documentor\Reflection\ReflectionClass' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionClass.php'</font> <i>(length=58)</i>
  'Documentor\Reflection\ReflectionClassTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Reflection/ReflectionClassTest.php'</font> <i>(length=68)</i>
  'Documentor\Reflection\ReflectionConstant' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionConstant.php'</font> <i>(length=61)</i>
  'Documentor\Reflection\ReflectionConstantTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Reflection/ReflectionConstantTest.php'</font> <i>(length=71)</i>
  'Documentor\Reflection\ReflectionFunction' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionFunction.php'</font> <i>(length=61)</i>
  'Documentor\Reflection\ReflectionMethod' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php'</font> <i>(length=59)</i>
  'Documentor\Reflection\ReflectionParameter' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionParameter.php'</font> <i>(length=62)</i>
  'Documentor\Reflection\ReflectionProperty' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionProperty.php'</font> <i>(length=61)</i>
  'Documentor\Resolver' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Resolver.php'</font> <i>(length=40)</i>
  'Documentor\Tags\GenericTag' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tags/GenericTag.php'</font> <i>(length=47)</i>
  'Documentor\Tags\ParameterTag' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tags/ParameterTag.php'</font> <i>(length=49)</i>
  'Documentor\ThemeResource' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/ThemeResource.php'</font> <i>(length=45)</i>
  'Documentor\ThemeResourceTest' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/ThemeResourceTest.php'</font> <i>(length=55)</i>
  'Documentor\Themes\Markdown' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Themes/Markdown.php'</font> <i>(length=47)</i>
  'TestNamespace\TestClass' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Resources/TestClass.php'</font> <i>(length=57)</i>
  'TestNamespace\TestClassTwo' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Tests/Resources/TestClass.php'</font> <i>(length=57)</i>
  '\ComposerAutoloaderInit' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/vendor/composer/autoload_real.php'</font> <i>(length=61)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$file&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$import&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$imports&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><font color='#3465a4'>null</font>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$importsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'>
<b>object</b>(<i>Documentor\Parsers\ImportsParser</i>)[<i>237</i>]
  <i>protected</i> 'filePath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Exception.php'</font> <i>(length=41)</i>
  <i>protected</i> 'parsers' <font color='#888a85'>=&gt;</font> 
    <b>array</b>
      <i><font color='#888a85'>empty</font></i>
  <i>protected</i> 'results' <font color='#888a85'>=&gt;</font> <font color='#3465a4'>null</font>
  <i>protected</i> 'tokens' <font color='#888a85'>=&gt;</font> 
    <b>array</b>
      0 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>368</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;?php&#10;'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>1</font>
      1 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>367</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/**&#10; * Documentor&#10; *&#10; * Copyright (c) 2011-2012, Julien Ballestracci &lt;julien@nitronet.org&gt;.&#10; * All rights reserved.&#10; *&#10; * For the full copyright and license information, please view the LICENSE&#10; * file that was distributed with this source code.&#10; *&#10; * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS&#10; * &quot;AS IS&quot; AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT&#10; * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS&#10; * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVEN'...</font> <i>(length=1365)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>2</font>
      2 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>32</font>
      3 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>377</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'namespace'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      4 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      5 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Documentor'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      6 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      7 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      8 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>367</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/**&#10; * Base exception class&#10; *&#10; * @category Exceptions&#10; * @package  Documentor&#10; * @author   Julien Ballestracci &lt;julien@nitronet.org&gt;&#10; * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License&#10; * @link     http://github.com/neiluj/Documentor&#10; */'</font> <i>(length=263)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>35</font>
      9 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      10 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>353</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'class'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      11 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      12 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Exception'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      13 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      14 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>355</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'extends'</font> <i>(length=7)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      15 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      16 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>380</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'\'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      17 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'RuntimeException'</font> <i>(length=16)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      18 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      19 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      20 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      21 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'}'</font> <i>(length=1)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$ns&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$nsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
</table></font>
Documentor\Documentor\\RuntimeException: 

