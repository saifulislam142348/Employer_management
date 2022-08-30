<script>
    $(document).ready(function(){
    $('.up_bonus').click(function(){
        let id =$(this).data('id');
        let bonus_month =$(this).data('bonus_month');
        let bonus_title =$(this).data('bonus_title');
        let bonus =$(this).data('bonus');
        $("input[name='up_bonus_id']").val(id);
        $("input[name='up_bonus_month']").val(bonus_month);
        $("input[name='up_bonus_title']").val(bonus_title);
        $("input[name='up_bonus']").val(bonus);
        
    });
});
</script>