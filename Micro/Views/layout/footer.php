
</div>
<div class="appFooter">
    <span>&#174;&emsp;Website Footer</span>
</div>
<script>
    window.onload = ()=>{
        let languageSwitch = document.querySelector('#formSwitch');
        const  languageSelectors  = Array.prototype.slice.call(document.querySelectorAll('.language'), 0);
        languageSelectors.forEach((link) => {
            link.addEventListener('click',(e)=>{
                e.preventDefault();
                languageSwitch.elements[0].value = e.target.classList[1];
                languageSwitch.submit();
            },false)
        });
    }
</script>
</body>
</html>