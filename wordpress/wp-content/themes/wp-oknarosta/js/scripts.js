function SetAllBlocksHeight(e){var i=0;$(e).each(function(){var e=$(this).height();e>i&&(i=e)}),$(e).css("height",i)}!function(){for(var e,i=function(){},n=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],o=n.length,r=window.console=window.console||{};o--;)e=n[o],r[e]||(r[e]=i)}();var impressumHeadin=$(".masonry-brick");SetAllBlocksHeight(impressumHeadin);