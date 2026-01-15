jQuery(document).ready(function() {
    jQuery('.blog-feed-2 .blog-list_item').on('click', function () {
        jQuery('.blog-feed-2 .blog-list_item').removeClass('active');
        jQuery(this).addClass('active');
        if (jQuery(this).data('slug') == 'all') {
            var arraySlug = jQuery(this).data('list');
            //var dataSlug = arraySlug.split(',');
            var dataSlug = 'all';
            var dataLabel = 'All';
        } else {
            var dataSlug = jQuery(this).data('slug');
            var dataLabel = jQuery(this).data('slug');
            var dataName = jQuery(this).data('name');
        }
        jQuery('#dynamic-label').html(dataLabel);
        jQuery.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'filter_blog_feed_2',
                category: dataSlug,
            },
            beforeSend: function() {
                ajax_loader_icon();
            },
            complete: function(){

            },
            success: function (res) {

                jQuery(".blog-feed-2 .negative-margin").fadeOut(400, function () {
                    jQuery(".blog-feed-2 .filter-tiles").html(res);
                    jQuery('.blog-feed-2 .blog-list_item button.button.tag').html(dataName);
                    jQuery('.load_more_wrapper').css("display", "");
                    jQuery('.blog-feed-2 #load-more-feed-2').attr('data-cat', dataLabel);
                    jQuery('.blog-feed-2 #load-more-feed-2').attr("data-page", "1");
                    ajax_remove_loader_icon();
                });

                setTimeout(function () {
                    jQuery(".blog-feed-2 .negative-margin").fadeIn(400);
                }, 400);
            }
        });
    });

    //LOAD MORE AJAX SCRIPT

    var div = jQuery('.filter-tiles'),
        height = div.height();

    jQuery('#load-more-feed-2').on('click', function(event) {
        var currentPage = jQuery(this).attr('data-page');
        currentPage++;
        var totalPosts = jQuery(this).attr('data-total');
        var catData = jQuery(this).attr('data-cat');

        var postsOnPageAllowed = currentPage * 8;

        jQuery.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'newwave_load_more_feed_2',
                paged: currentPage,
                categorySlug: catData
            },
            beforeSend: function() {
                ajax_loader_icon_load_more();
            },
            complete: function(){

            },
            success: function (res) {
                jQuery('.blog-feed-2 #load-more-feed-2').attr("data-page", currentPage);
                jQuery(res).hide().appendTo('.blog-feed-2 .filter-tiles').fadeIn(400);
                if(totalPosts <= postsOnPageAllowed ){
                    jQuery('.blog-feed-2 .load_more_wrapper').fadeOut(400);
                }else{
                    jQuery('.blog-feed-2 .load_more_wrapper').fadeIn(400);
                }
                ajax_remove_loader_icon();
            }
        });

        event.preventDefault();

    });

    function ajax_loader_icon(){
        var loader = jQuery('<div class="lds-default" style="display:none; margin: 80px auto 240px;"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
        jQuery('.blog-grid-results .filter-tiles').html(loader);
        loader.fadeIn(400);
        jQuery('.blog-feed-2 .load_more_wrapper').hide();
    }
    function ajax_loader_icon_load_more(){
        var loader = jQuery('<div class="lds-default" style="display:none; margin: 0 auto -12px;"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
        var loadMorebutton = jQuery('.blog-feed-2 .load_more_wrapper');
        loadMorebutton.hide();
        loader.fadeIn(400);
        loadMorebutton.after(loader);
    }
    function ajax_remove_loader_icon(){
        jQuery('.lds-default').remove();
    }

});

jQuery(document).ready(function() {
    //hide tab is empty
    jQuery('#finance-tab-link').hide();
    jQuery('#tab-title-finance_tab').hide();

    //show tab and buttons if tab has content
    jQuery('#tab-finance_tab').on('DOMSubtreeModified', function(){
        jQuery('#finance-tab-link').show();
        jQuery(this).show();
        jQuery('#tab-title-finance_tab').show();
        jQuery('#tab-title-finance_tab a').click();
    });

    //scroll to the tab
    jQuery(".scroll-to-tab").on("click", function(event) {
        event.preventDefault();
        var targetTab = jQuery(this).data("tab");
        var targetPosition = jQuery(targetTab).offset().top - 200;
        jQuery("html, body").animate({
            scrollTop: targetPosition
        }, 400);
        jQuery(targetTab + " a").click();
    });

    //set the second tab open as default
    setTimeout(function() {
        jQuery('#tab-title-how_to_buy_tab a').click();
    }, 1000);
});
// FAQ accordion block
document.addEventListener('DOMContentLoaded', function () {
  var titles = document.querySelectorAll('.accordion-section-title');
  titles.forEach(function (title) {
    title.addEventListener('click', function () {
      var section = title.closest('.accordion-section');
      var isExpanded = title.getAttribute('aria-expanded') === 'true';
      // Toggle aria-expanded
      title.setAttribute('aria-expanded', String(!isExpanded));
      // Toggle open class on the section
      section.classList.toggle('is-open', !isExpanded);
    });
  });
});