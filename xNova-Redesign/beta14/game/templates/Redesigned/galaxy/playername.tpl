			<td class="playername inactive">
				<a href="#" class="TTgalaxy" rel="#player{player_id}" onmouseover="Tip('<div id=player{player_id}>\n\t<div id=TTWrapper>\n\t\t<div id=tooltipBody class=tooltipBody>\n\t\t\t<div class=TTInner id=TTPlayer>\n\t\t\t\t<table cellpadding=0 cellspacing=0>\n\t\t\t\t<tr><th colspan=2><span class=spacing>{player_name}</span></th></tr>\n\t\t\t\t<tr class=body>\n\t\t\t\t\t<td class=actions>\n\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t<li class=rank>Ranking: {rank}</li>\n\t\t\t\t\t\t\t<li><a href=./?page=write&to={player_id}&ajax=1&height=500&width={pos}50 class=thickbox>Message</a></li>\n\t\t\t\t\t\t\t<li><a href=./?page=networkbuddy&action=6&buddy_id={player_id}&site=2>Buddy request</a></li>\n\t\t\t\t\t\t\t<li><a href=./?page=statistics&start={player_rank}>Statistic</a></li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</td>\n\t\t\t\t\t<td class=actions>\n\t\t\t\t\t\t{avatar_small}\n\t\t\t\t\t</td>\n\t\t\t\t</tr>\n\t\t\t\t<tr class=footer style=background:url({{skin}}/img/tooltip/ttfooter.gif) no-repeat top center;height:11px; background-repeat:no-repeat;>\n\t\t\t\t\t<td colspan=2></td>\n\t\t\t\t</tr>\n\t\t\t\t</table>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>',BGCOLOR,'',FONTCOLOR,'#FFFFFF',BORDERWIDTH,0,FOLLOWMOUSE,false,STICKY,true,DURATION,5000);" onmouseout="UnTip();">
					<span class="status_abbr_inactive">{player_name}</span>
				</a>
			</td>