<html>
{include file='./header/header.tpl'}

<body>
    <style>
        body {
            font-family: iran_sans;
            size: 25px;
        }
    </style>
    <div id="wrapper">
        {include file='./body/nav.tpl'}
        <div id="page-wrapper">
            {block name="cotentn"}{/block}
        </div>
    </div>
{* footer *}
        {include file='./body/footer.tpl'}

</body>

</html>