<br />
<font size='1'><table class='xdebug-error' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: Invalid argument supplied for foreach() in /home/neiluj/www/Documentor/Resolver.php on line <i>91</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>326704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>376516</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generate(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>16</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>11.9211</td><td bgcolor='#eeeeec' align='right'>1157848</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generateClassDoc( <span title='class Documentor\Reflection\ReflectionClass { protected $methods = array (&apos;getVisibility&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setVisibility&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isAbstract&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setAbstract&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isStatic&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setStatic&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isFinal&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setFinal&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;getParameters&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;getDeclaringClass&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setDeclaringClass&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isPublic&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isProtected&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isPrivate&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }); protected $properties = array (&apos;visibility&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }, &apos;abstract&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }, &apos;static&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }, &apos;final&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }, &apos;declaringClass&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }); protected $constants = array (&apos;VIS_PUBLIC&apos; =&gt; class Documentor\Reflection\ReflectionConstant { ... }, &apos;VIS_PRIVATE&apos; =&gt; class Documentor\Reflection\ReflectionConstant { ... }, &apos;VIS_PROTECTED&apos; =&gt; class Documentor\Reflection\ReflectionConstant { ... }); protected $abstract = FALSE; protected $final = FALSE; protected $implements = array (); protected $parentClass = &apos;ReflectionFunction&apos;; protected $interface = FALSE; protected $startLine = 43; protected $endLine = 147; protected $name = &apos;Documentor\\Reflection\\ReflectionMethod&apos;; protected $fileName = &apos;/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php&apos;; protected $namespaceName = &apos;Documentor\\Reflection&apos;; protected $docComment = class Documentor\DocComment { protected $block = &apos;/**\n * @category   Parsers\n * @package    Documentor\n * @subpackage Reflection\n * @author     Julien Ballestracci &lt;julien@nitronet.org&gt;\n * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License\n * @link       http://github.com/neiluj/Documentor\n */&apos;; protected $startLine = 35; protected $endLine = 42; protected $comment = NULL } }'><font color='#8f5902'>object(Documentor\Reflection\ReflectionClass)[396]</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>35</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>11.9213</td><td bgcolor='#eeeeec' align='right'>1159364</td><td bgcolor='#eeeeec'>Documentor\ThemeResource->execute(  )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>88</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>11.9214</td><td bgcolor='#eeeeec' align='right'>1201120</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml'</font> )</td><td title='/home/neiluj/www/Documentor/ThemeResource.php' bgcolor='#eeeeec'>../ThemeResource.php<b>:</b>106</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>11.9215</td><td bgcolor='#eeeeec' align='right'>1202112</td><td bgcolor='#eeeeec'>Documentor\Resolver->heritedMethods(  )</td><td title='/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml' bgcolor='#eeeeec'>../class.phtml<b>:</b>17</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>11.9215</td><td bgcolor='#eeeeec' align='right'>1202444</td><td bgcolor='#eeeeec'>Documentor\Resolver->getParentMethods( <span title='&apos;ReflectionFunction&apos;'><font color='#cc0000'>string(18)</font></span>, <span title='array ()'><font color='#ce5c00'>array(0)</font></span> )</td><td title='/home/neiluj/www/Documentor/Resolver.php' bgcolor='#eeeeec'>../Resolver.php<b>:</b>120</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>11.9215</td><td bgcolor='#eeeeec' align='right'>1202444</td><td bgcolor='#eeeeec'>Documentor\Resolver->resolveClassName( <span title='&apos;ReflectionFunction&apos;'><font color='#cc0000'>string(18)</font></span> )</td><td title='/home/neiluj/www/Documentor/Resolver.php' bgcolor='#eeeeec'>../Resolver.php<b>:</b>127</td></tr>
<tr><th align='left' colspan='5' bgcolor='#e9b96e'>Variables in local scope (#8)</th></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$className&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'ReflectionFunction'</font> <i>(length=18)</i>
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
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$file&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php'</font> <i>(length=59)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$import&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$imports&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><font color='#3465a4'>null</font>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$importsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'>
<b>object</b>(<i>Documentor\Parsers\ImportsParser</i>)[<i>316</i>]
  <i>protected</i> 'filePath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php'</font> <i>(length=59)</i>
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
      6 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>380</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'\'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      7 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Reflection'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      8 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      9 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      10 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>367</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/**&#10; * @category   Parsers&#10; * @package    Documentor&#10; * @subpackage Reflection&#10; * @author     Julien Ballestracci &lt;julien@nitronet.org&gt;&#10; * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License&#10; * @link       http://github.com/neiluj/Documentor&#10; */'</font> <i>(length=269)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>35</font>
      11 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>42</font>
      12 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>353</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'class'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      13 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      14 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'ReflectionMethod'</font> <i>(length=16)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      15 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      16 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>355</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'extends'</font> <i>(length=7)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      17 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      18 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'ReflectionFunction'</font> <i>(length=18)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      19 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      20 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      21 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      22 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>335</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'const'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      23 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      24 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'VIS_PUBLIC'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      25 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      26 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      27 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      28 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>315</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&apos;public&apos;'</font> <i>(length=8)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      29 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      30 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      31 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>335</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'const'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      32 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      33 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'VIS_PRIVATE'</font> <i>(length=11)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      34 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      35 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      36 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      37 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>315</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&apos;private&apos;'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      38 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      39 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      40 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>335</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'const'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      41 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      42 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'VIS_PROTECTED'</font> <i>(length=13)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      43 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      44 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      45 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      46 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>315</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&apos;protected&apos;'</font> <i>(length=11)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      47 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      48 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    &#10;    '</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      49 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      50 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      51 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$visibility'</font> <i>(length=11)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      52 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      53 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      54 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      55 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'self'</font> <i>(length=4)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      56 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>376</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'::'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      57 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'VIS_PUBLIC'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      58 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      59 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      60 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      61 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      62 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$abstract'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      63 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      64 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      65 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      66 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'false'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      67 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      68 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      69 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      70 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      71 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$static'</font> <i>(length=7)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      72 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      73 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      74 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      75 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'false'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      76 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      77 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      78 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      79 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      80 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$final'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      81 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      82 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      83 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      84 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'false'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      85 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      86 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      87 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>57</font>
      88 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>57</font>
      89 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$declaringClass'</font> <i>(length=15)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>57</font>
      90 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      91 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>57</font>
      92 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>342</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'public'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      93 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      94 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>334</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'function'</font> <i>(length=8)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      95 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      96 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'getVisibility'</font> <i>(length=13)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      97 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'('</font> <i>(length=1)</i>
      98 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>')'</font> <i>(length=1)</i>
      99 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      100 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      101 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;        '</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>60</font>
      102 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>336</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'return'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      103 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      104 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$this'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      105 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>357</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'-&gt;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      106 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'visibility'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      107 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      108 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      109 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'}'</font> <i>(length=1)</i>
      110 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>62</font>
      111 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>342</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'public'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      112 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      113 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>334</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'function'</font> <i>(length=8)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      114 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      115 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'setVisibility'</font> <i>(length=13)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      116 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'('</font> <i>(length=1)</i>
      117 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$visibility'</font> <i>(length=11)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      118 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>')'</font> <i>(length=1)</i>
      119 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      120 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      121 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;        '</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>65</font>
      122 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$this'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      123 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>357</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'-&gt;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      124 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'visibility'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      125 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      126 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      127 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      <i>more elements...</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$ns&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$nsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
</table></font>
# Class: [Documentor\Reflection](../../../namespaces/Documentor/Reflection.md) \ [ReflectionMethod](../../../classes/Documentor/Reflection/ReflectionMethod.md) extends <br />
<font size='1'><table class='xdebug-error' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: Invalid argument supplied for foreach() in /home/neiluj/www/Documentor/Resolver.php on line <i>91</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>326704</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>376516</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generate(  )</td><td title='/home/neiluj/www/Documentor/test.php' bgcolor='#eeeeec'>../test.php<b>:</b>16</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>11.9211</td><td bgcolor='#eeeeec' align='right'>1157848</td><td bgcolor='#eeeeec'>Documentor\Themes\Markdown->generateClassDoc( <span title='class Documentor\Reflection\ReflectionClass { protected $methods = array (&apos;getVisibility&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setVisibility&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isAbstract&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setAbstract&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isStatic&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setStatic&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isFinal&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setFinal&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;getParameters&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;getDeclaringClass&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;setDeclaringClass&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isPublic&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isProtected&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }, &apos;isPrivate&apos; =&gt; class Documentor\Reflection\ReflectionMethod { ... }); protected $properties = array (&apos;visibility&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }, &apos;abstract&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }, &apos;static&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }, &apos;final&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }, &apos;declaringClass&apos; =&gt; class Documentor\Reflection\ReflectionProperty { ... }); protected $constants = array (&apos;VIS_PUBLIC&apos; =&gt; class Documentor\Reflection\ReflectionConstant { ... }, &apos;VIS_PRIVATE&apos; =&gt; class Documentor\Reflection\ReflectionConstant { ... }, &apos;VIS_PROTECTED&apos; =&gt; class Documentor\Reflection\ReflectionConstant { ... }); protected $abstract = FALSE; protected $final = FALSE; protected $implements = array (); protected $parentClass = &apos;ReflectionFunction&apos;; protected $interface = FALSE; protected $startLine = 43; protected $endLine = 147; protected $name = &apos;Documentor\\Reflection\\ReflectionMethod&apos;; protected $fileName = &apos;/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php&apos;; protected $namespaceName = &apos;Documentor\\Reflection&apos;; protected $docComment = class Documentor\DocComment { protected $block = &apos;/**\n * @category   Parsers\n * @package    Documentor\n * @subpackage Reflection\n * @author     Julien Ballestracci &lt;julien@nitronet.org&gt;\n * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License\n * @link       http://github.com/neiluj/Documentor\n */&apos;; protected $startLine = 35; protected $endLine = 42; protected $comment = NULL } }'><font color='#8f5902'>object(Documentor\Reflection\ReflectionClass)[396]</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>35</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>11.9213</td><td bgcolor='#eeeeec' align='right'>1159364</td><td bgcolor='#eeeeec'>Documentor\ThemeResource->execute(  )</td><td title='/home/neiluj/www/Documentor/Themes/Markdown.php' bgcolor='#eeeeec'>../Markdown.php<b>:</b>88</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>11.9214</td><td bgcolor='#eeeeec' align='right'>1201120</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml'</font> )</td><td title='/home/neiluj/www/Documentor/ThemeResource.php' bgcolor='#eeeeec'>../ThemeResource.php<b>:</b>106</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>12.1262</td><td bgcolor='#eeeeec' align='right'>1179844</td><td bgcolor='#eeeeec'>displayLinkOrClassname( <span title='class Documentor\ThemeResource { protected $type = &apos;class&apos;; protected $project = class Documentor\Project { protected $name = &apos;Documentor&apos;; protected $directories = array (...); protected $version = &apos;1.0&apos;; protected $namespaces = array (...); protected $classes = array (...); protected $functions = array (...); protected $indexed = TRUE; protected $hashes = array (...) }; protected $resolver = class Documentor\Resolver { protected $project = class Documentor\Project { ... }; protected $reflector = class Documentor\Reflection\ReflectionClass { ... } }; protected $reflector = class Documentor\Reflection\ReflectionClass { protected $methods = array (...); protected $properties = array (...); protected $constants = array (...); protected $abstract = FALSE; protected $final = FALSE; protected $implements = array (...); protected $parentClass = &apos;ReflectionFunction&apos;; protected $interface = FALSE; protected $startLine = 43; protected $endLine = 147; protected $name = &apos;Documentor\\Reflection\\ReflectionMethod&apos;; protected $fileName = &apos;/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php&apos;; protected $namespaceName = &apos;Documentor\\Reflection&apos;; protected $docComment = class Documentor\DocComment { ... } }; protected $resource = &apos;/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml&apos;; protected $options = array () }'><font color='#8f5902'>object(Documentor\ThemeResource)[141]</font></span>, <span title='&apos;ReflectionFunction&apos;'><font color='#cc0000'>string(18)</font></span>, <span title='&apos;Documentor\\Reflection\\ReflectionMethod&apos;'><font color='#cc0000'>string(38)</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Resources/markdown/class.phtml' bgcolor='#eeeeec'>../class.phtml<b>:</b>21</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>12.1262</td><td bgcolor='#eeeeec' align='right'>1179844</td><td bgcolor='#eeeeec'>Documentor\Resolver->resolveClassName( <span title='&apos;ReflectionFunction&apos;'><font color='#cc0000'>string(18)</font></span> )</td><td title='/home/neiluj/www/Documentor/Themes/Resources/markdown/macros.inc.php' bgcolor='#eeeeec'>../macros.inc.php<b>:</b>7</td></tr>
<tr><th align='left' colspan='5' bgcolor='#e9b96e'>Variables in local scope (#7)</th></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$className&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'ReflectionFunction'</font> <i>(length=18)</i>
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
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$file&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php'</font> <i>(length=59)</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$import&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$imports&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><font color='#3465a4'>null</font>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$importsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'>
<b>object</b>(<i>Documentor\Parsers\ImportsParser</i>)[<i>47</i>]
  <i>protected</i> 'filePath' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/home/neiluj/www/Documentor/Reflection/ReflectionMethod.php'</font> <i>(length=59)</i>
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
      6 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>380</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'\'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      7 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'Reflection'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      8 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      9 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>33</font>
      10 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>367</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'/**&#10; * @category   Parsers&#10; * @package    Documentor&#10; * @subpackage Reflection&#10; * @author     Julien Ballestracci &lt;julien@nitronet.org&gt;&#10; * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License&#10; * @link       http://github.com/neiluj/Documentor&#10; */'</font> <i>(length=269)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>35</font>
      11 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>42</font>
      12 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>353</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'class'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      13 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      14 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'ReflectionMethod'</font> <i>(length=16)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      15 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      16 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>355</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'extends'</font> <i>(length=7)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      17 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      18 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'ReflectionFunction'</font> <i>(length=18)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      19 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;'</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>43</font>
      20 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      21 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>44</font>
      22 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>335</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'const'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      23 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      24 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'VIS_PUBLIC'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      25 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      26 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      27 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      28 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>315</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&apos;public&apos;'</font> <i>(length=8)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      29 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      30 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>45</font>
      31 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>335</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'const'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      32 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      33 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'VIS_PRIVATE'</font> <i>(length=11)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      34 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      35 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      36 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      37 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>315</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&apos;private&apos;'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      38 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      39 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>46</font>
      40 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>335</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'const'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      41 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      42 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'VIS_PROTECTED'</font> <i>(length=13)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      43 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      44 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      45 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      46 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>315</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&apos;protected&apos;'</font> <i>(length=11)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      47 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      48 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    &#10;    '</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>47</font>
      49 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      50 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      51 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$visibility'</font> <i>(length=11)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      52 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      53 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      54 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      55 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'self'</font> <i>(length=4)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      56 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>376</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'::'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      57 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'VIS_PUBLIC'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      58 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      59 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>49</font>
      60 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      61 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      62 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$abstract'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      63 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      64 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      65 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      66 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'false'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      67 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      68 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>51</font>
      69 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      70 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      71 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$static'</font> <i>(length=7)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      72 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      73 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      74 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      75 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'false'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      76 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      77 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>53</font>
      78 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      79 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      80 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$final'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      81 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      82 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      83 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      84 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'false'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      85 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      86 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>55</font>
      87 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>343</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'protected'</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>57</font>
      88 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>57</font>
      89 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$declaringClass'</font> <i>(length=15)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>57</font>
      90 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      91 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>57</font>
      92 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>342</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'public'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      93 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      94 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>334</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'function'</font> <i>(length=8)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      95 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      96 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'getVisibility'</font> <i>(length=13)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      97 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'('</font> <i>(length=1)</i>
      98 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>')'</font> <i>(length=1)</i>
      99 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>59</font>
      100 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      101 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;        '</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>60</font>
      102 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>336</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'return'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      103 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      104 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$this'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      105 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>357</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'-&gt;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      106 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'visibility'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      107 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>';'</font> <i>(length=1)</i>
      108 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>61</font>
      109 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'}'</font> <i>(length=1)</i>
      110 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;&#10;    '</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>62</font>
      111 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>342</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'public'</font> <i>(length=6)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      112 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      113 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>334</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'function'</font> <i>(length=8)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      114 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      115 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'setVisibility'</font> <i>(length=13)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      116 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'('</font> <i>(length=1)</i>
      117 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$visibility'</font> <i>(length=11)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      118 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>')'</font> <i>(length=1)</i>
      119 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;    '</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>64</font>
      120 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'{'</font> <i>(length=1)</i>
      121 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&#10;        '</font> <i>(length=9)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>65</font>
      122 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>309</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'$this'</font> <i>(length=5)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      123 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>357</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'-&gt;'</font> <i>(length=2)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      124 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>307</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'visibility'</font> <i>(length=10)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      125 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      126 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'='</font> <i>(length=1)</i>
      127 <font color='#888a85'>=&gt;</font> 
        <b>array</b>
          0 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>371</font>
          1 <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>' '</font> <i>(length=1)</i>
          2 <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>66</font>
      <i>more elements...</i>
</pre></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$ns&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
<tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$nsC&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec' valign='top'><i>Undefined</i></td></tr>
</table></font>
[Documentor\Reflection\ReflectionFunction](../../../classes/Documentor/Reflection/ReflectionFunction.md)


Summary: [Constants](#constants) - [Methods](#methods-summary) - [Attributes](#attributes-summary)
## Constants

* ```VIS_PUBLIC```
* ```VIS_PRIVATE```
* ```VIS_PROTECTED```


## Methods Summary

* [getDeclaringClass](#getdeclaringclass)
* [getParameters](#getparameters)
* [getVisibility](#getvisibility)
* [isAbstract](#isabstract)
* [isFinal](#isfinal)
* [isPrivate](#isprivate)
* [isProtected](#isprotected)
* [isPublic](#ispublic)
* [isStatic](#isstatic)
* [setAbstract](#setabstract)
* [setDeclaringClass](#setdeclaringclass)
* [setFinal](#setfinal)
* [setStatic](#setstatic)
* [setVisibility](#setvisibility)
* Herited from [Documentor\Reflection\ReflectionFunction](../../../classes/Documentor/Reflection/ReflectionFunction.md): [__construct](../../../classes/Documentor/Reflection/ReflectionFunction.md#__construct), [isInternal](../../../classes/Documentor/Reflection/ReflectionFunction.md#isinternal), [isUserDefined](../../../classes/Documentor/Reflection/ReflectionFunction.md#isuserdefined), [getSignatureString](../../../classes/Documentor/Reflection/ReflectionFunction.md#getsignaturestring), [setSignatureString](../../../classes/Documentor/Reflection/ReflectionFunction.md#setsignaturestring), [getParameters](../../../classes/Documentor/Reflection/ReflectionFunction.md#getparameters), [hasParameters](../../../classes/Documentor/Reflection/ReflectionFunction.md#hasparameters), [_getParametersSignature](../../../classes/Documentor/Reflection/ReflectionFunction.md#_getparameterssignature), [_getParameterDbFromString](../../../classes/Documentor/Reflection/ReflectionFunction.md#_getparameterdbfromstring), [getNumberOfParameters](../../../classes/Documentor/Reflection/ReflectionFunction.md#getnumberofparameters), [getNumberOfRequiredParameters](../../../classes/Documentor/Reflection/ReflectionFunction.md#getnumberofrequiredparameters), * Herited from [Documentor\AbstractReflector](../../../classes/Documentor/AbstractReflector.md): [__construct](../../../classes/Documentor/AbstractReflector.md#__construct), [getStartLine](../../../classes/Documentor/AbstractReflector.md#getstartline), [setStartLine](../../../classes/Documentor/AbstractReflector.md#setstartline), [getEndLine](../../../classes/Documentor/AbstractReflector.md#getendline), [setEndLine](../../../classes/Documentor/AbstractReflector.md#setendline), [getName](../../../classes/Documentor/AbstractReflector.md#getname), [setName](../../../classes/Documentor/AbstractReflector.md#setname), [getFileName](../../../classes/Documentor/AbstractReflector.md#getfilename), [setFileName](../../../classes/Documentor/AbstractReflector.md#setfilename), [getNamespaceName](../../../classes/Documentor/AbstractReflector.md#getnamespacename), [setNamespaceName](../../../classes/Documentor/AbstractReflector.md#setnamespacename), [getShortName](../../../classes/Documentor/AbstractReflector.md#getshortname), [inNamespace](../../../classes/Documentor/AbstractReflector.md#innamespace), [getDocComment](../../../classes/Documentor/AbstractReflector.md#getdoccomment), [setDocComment](../../../classes/Documentor/AbstractReflector.md#setdoccomment), 

## Attributes Summary

* protected  [$abstract](#abstract)
* protected  [$declaringClass](#declaringclass)
* protected  [$final](#final)
* protected  [$static](#static)
* protected  [$visibility](#visibility)

---

## Methods

### __construct

```
public function __construct($name = null)
```

##### Parameters

* **$name** *(optional)*
  *no description*

##### Return type

```
mixed
```

---

### getStartLine

```
public function getStartLine()
```


##### Return type

```
mixed
```

---

### setStartLine

```
public function setStartLine($startLine)
```

##### Parameters

* **$startLine** 
  *no description*

##### Return type

```
mixed
```

---

### getEndLine

```
public function getEndLine()
```


##### Return type

```
mixed
```

---

### setEndLine

```
public function setEndLine($endLine)
```

##### Parameters

* **$endLine** 
  *no description*

##### Return type

```
mixed
```

---

### getName

```
public function getName()
```


##### Return type

```
mixed
```

---

### setName

```
public function setName($name)
```

##### Parameters

* **$name** 
  *no description*

##### Return type

```
mixed
```

---

### getFileName

```
public function getFileName()
```


##### Return type

```
mixed
```

---

### setFileName

```
public function setFileName($fileName)
```

##### Parameters

* **$fileName** 
  *no description*

##### Return type

```
mixed
```

---

### getNamespaceName

```
public function getNamespaceName()
```


##### Return type

```
mixed
```

---

### setNamespaceName

```
public function setNamespaceName($namespaceName)
```

##### Parameters

* **$namespaceName** 
  *no description*

##### Return type

```
mixed
```

---

### getShortName

```
public function getShortName()
```


##### Return type

```
mixed
```

---

### inNamespace

```
public function inNamespace()
```


##### Return type

```
mixed
```

---

### getDocComment

```
public function getDocComment()
```




##### Return type

```
DocComment
```

---

### setDocComment

```
public function setDocComment(DocComment $comment)
```

##### Parameters

* **$comment** 
  *no description*

##### Return type

```
mixed
```

---



## Attributes

### $abstract
```
protected $abstract
```



##### Type


```
mixed*
```

---

### $declaringClass
```
protected $declaringClass
```



##### Type


```
mixed*
```

---

### $final
```
protected $final
```



##### Type


```
mixed*
```

---

### $static
```
protected $static
```



##### Type


```
mixed*
```

---

### $visibility
```
protected $visibility
```



##### Type


```
mixed*
```

---

