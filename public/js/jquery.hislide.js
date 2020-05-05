(function($) {
    var slide = function(ele,options) {
        var $ele = $(ele);
        var setting = {
            speed: 3000,
            interval: 3000,
            
        };
        $.extend(true, setting, options);
        var states = [
            { $zIndex: 1, width: 130, height: 155, top: 65, left: 134, $opacity: 0.2 },
            { $zIndex: 2, width: 140, height: 175, top: 55, left: 0, $opacity: 0.4 },
            { $zIndex: 3, width: 180, height: 223, top: 31, left: 110, $opacity: 0.7 },
            { $zIndex: 4, width: 234, height: 293, top: 0, left: 263, $opacity: 1 },
            { $zIndex: 3, width: 180, height: 223, top: 31, left: 470, $opacity: 0.7 },
            { $zIndex: 2, width: 140, height: 175, top: 55, left: 620, $opacity: 0.4 },
            { $zIndex: 1, width: 130, height: 155, top: 65, left: 500, $opacity: 0.2 }
        ];

        var $lis = $ele.find('li');
        var timer = null;

        $ele.find('.hi-next').on('click', function() {
            next();
        });

        $ele.find('.sliding-images').on('click', function() {
            next();
        });

        $ele.find('.hi-prev').on('click', function() {
            states.push(states.shift());
            move();
        });
        $ele.on('mouseenter', function() {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function() {
            autoPlay();
        });

        move();
        autoPlay();

        function move() {
            $lis.each(function(index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
            });
        }

        function next() {
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    }
    $.fn.hiSlide = function(options) {
        $(this).each(function(index, ele) {
            slide(ele,options);
        });
        return this;
    }
})(jQuery);
