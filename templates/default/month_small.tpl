<table width="170" border="0" cellpadding="3" cellspacing="0" class="calborder">
	<tr height="20">
		<td align="center" class="sideback"><b>{MONTH_TITLE}</b></td>
	</tr>
	<tr>
		<td align="center">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr align="center">
					<!-- loop weekday on -->	
					<td width="22"><b>{LOOP_WEEKDAY}</b></td>
					<!-- loop weekday off -->
				</tr>
				<!-- loop monthweeks on -->
				<tr align="center">
					<!-- loop monthdays on -->
					<!-- switch notthismonth on -->
					<td>
						<!-- switch anyevent on -->
						<a class="psf" href="{MINICAL_VIEW}.php?cal={CAL}&amp;getdate={DAYLINK}"><span class="G10G">{DAY}</span></a>
						<!-- switch anyevent off -->
						<!-- switch noevent on -->
						<a class="psf" href="{MINICAL_VIEW}.php?cal={CAL}&amp;getdate={DAYLINK}"><span class="G10G">{DAY}</span></a>
						<!-- switch noevent off -->
					</td>
					<!-- switch notthismonth off -->
					<!-- switch istoday on -->
					<td>
						<!-- switch anyevent on -->
						<a class="ps2" href="{MINICAL_VIEW}.php?cal={CAL}&amp;getdate={DAYLINK}">{DAY}</a>
						<!-- switch anyevent off -->
						<!-- switch noevent on -->
						<a class="psf" href="{MINICAL_VIEW}.php?cal={CAL}&amp;getdate={DAYLINK}">{DAY}</a>
						<!-- switch noevent off -->
					</td>
					<!-- switch istoday off -->
					<!-- switch ismonth on -->
					<td>
						<!-- switch anyevent on -->
						<a class="ps2" href="{MINICAL_VIEW}.php?cal={CAL}&amp;getdate={DAYLINK}">{DAY}</a>
						<!-- switch anyevent off -->
						<!-- switch noevent on -->
						<a class="psf" href="{MINICAL_VIEW}.php?cal={CAL}&amp;getdate={DAYLINK}">{DAY}</a>
						<!-- switch noevent off -->
					</td>
					<!-- switch ismonth off -->
					<!-- loop monthdays off -->
				</tr>
				<!-- loop monthweeks off -->
			</table>
			<img src="images/spacer.gif" width="1" height="3" alt=" "><br>
		</td>
	</tr>
</table>