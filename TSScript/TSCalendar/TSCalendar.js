		YAHOO.namespace("TSCalendar");
		var calendarArray = new Array();
		
		function configLanguage(lang){
			switch(lang){
				case "DE":
					YAHOO.widget.Calendar_Core.prototype.customConfig = function() {
						this.Config.Locale.MONTHS_SHORT = ["Jan", "Feb", "Mär", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez"];
						this.Config.Locale.MONTHS_LONG = ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"];
						this.Config.Locale.WEEKDAYS_1CHAR = ["S", "M", "D", "M", "D", "F", "S"];
						this.Config.Locale.WEEKDAYS_SHORT = ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"];
						this.Config.Locale.WEEKDAYS_MEDIUM = ["Son", "Mon", "Die", "Mit", "Don", "Fre", "Sam"];
						this.Config.Locale.WEEKDAYS_LONG = ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"];
					
						this.Config.Options.START_WEEKDAY = 1;
					}
				break;
				case "JP":
				  YAHOO.widget.Calendar_Core.prototype.customConfig = function() {
						this.Config.Locale.MONTHS_SHORT = ["1·î", "2·î", "3·î", "4·î", "5·î", "6·î", "7·î", "8·î", "9·î", "10·î", "11·î", "12·î"];
						this.Config.Locale.MONTHS_LONG = ["1·î", "2·î", "3·î", "4·î", "5·î", "6·î", "7·î", "8·î", "9·î", "10·î", "11·î", "12·î"];
						this.Config.Locale.WEEKDAYS_1CHAR = ["Æü", "·î", "²Ð", "¿å", "ÌÚ", "¶â", "ÅÚ"];
						this.Config.Locale.WEEKDAYS_SHORT = ["Æü", "·î", "²Ð", "¿å", "ÌÚ", "¶â", "ÅÚ"];
						this.Config.Locale.WEEKDAYS_MEDIUM = ["Æü", "·î", "²Ð", "¿å", "ÌÚ", "¶â", "ÅÚ"];
						this.Config.Locale.WEEKDAYS_LONG = ["Æü", "·î", "²Ð", "¿å", "ÌÚ", "¶â", "ÅÚ"];
					
						this.Config.Options.START_WEEKDAY = 1;
					}
				break;	
				default:
					YAHOO.widget.Calendar_Core.prototype.customConfig = function() {}
				break;
			}	
		}	
		
		// Resets the year to its previous valid value when something invalid is entered
		function FixYearInput(YearField) {
			 var todayDate = new Date();	
		   var YearRE = new RegExp('\\d{' + 4 + '}');
		   if (!YearRE.test(YearField.value)) YearField.value = todayDate.getFullYear();
		}
		
		function showCalendar(calendarId) {
			var linkToCalendar = document.getElementById("dateLink"+calendarId);
			var calendarContainer = document.getElementById("TSCalendar"+calendarId);
			var pos = YAHOO.util.Dom.getXY("dateLink"+calendarId);
			calendarContainer.style.display='block';
			YAHOO.util.Dom.setXY(calendarContainer, [pos[0],pos[1]+linkToCalendar.offsetHeight+1]);
		}

		function changeDate(calendarId) {
			var selMonth = document.getElementById("selMonth"+calendarId);
			var selDay = document.getElementById("selDay"+calendarId);
			var selYear = document.getElementById("selYear"+calendarId);
			var monthValue, dayValue, yearValue;
			
			if(selMonth.type=="select-one") monthValue = selMonth.selectedIndex+1;	
			else monthValue = selMonth.value;
			
			if(selDay.type=="select-one") dayValue = selDay.selectedIndex+1;	
			else dayValue = selDay.value;
			
			yearValue = selYear.value;
			calendarArray["TSCalendar"+calendarId].select(monthValue + "/" + dayValue + "/" + yearValue);
			calendarArray["TSCalendar"+calendarId].setMonth(monthValue-1);
			calendarArray["TSCalendar"+calendarId].setYear(yearValue);
			calendarArray["TSCalendar"+calendarId].render();
		}
		
		function initCalendar(calendarId,language, signaledDate, restrictionDate,controlPath) {
			
			var todayDate = new Date();
			var selMonth = document.getElementById("selMonth"+calendarId);
			var selDay = document.getElementById("selDay"+calendarId);
			var selYear = document.getElementById("selYear"+calendarId);
			var calendarContainer = document.getElementById("TSCalendar"+calendarId);
			var calendarVisibility = calendarContainer.style.display;
			
			configLanguage(language);
			
			if(selMonth.type=="select-one") selMonth.selectedIndex = todayDate.getMonth();	
			else selMonth.value = todayDate.getMonth()+1;
			
			if(selDay.type=="select-one") selDay.selectedIndex = todayDate.getDate()-1;	
			else selDay.value = todayDate.getDate();
			
			selYear.value = todayDate.getFullYear();
			
			calendarArray["TSCalendar"+calendarId] = new YAHOO.widget.Calendar("calendarArray[TSCalendar"+calendarId+"]", "TSCalendar"+calendarId);
				
			if(signaledDate != undefined && signaledDate != ""){
				calendarArray["TSCalendar"+calendarId].renderBodyCellSignaled = function(workingDate, cell) {
					YAHOO.util.Dom.addClass(cell, "renderedDate");
				}
				calendarArray["TSCalendar"+calendarId].addRenderer(signaledDate, calendarArray["TSCalendar"+calendarId].renderBodyCellSignaled);
			}	
			if(restrictionDate != undefined && restrictionDate != ""){
				calendarArray["TSCalendar"+calendarId].addRenderer(restrictionDate, calendarArray["TSCalendar"+calendarId].renderBodyCellRestricted);
			}	
			calendarArray["TSCalendar"+calendarId].render();
			
			
			calendarArray["TSCalendar"+calendarId].onSelect = function(){
				var calendarDate = this.getSelectedDates()[0];
				if(selMonth.type=="select-one") selMonth.selectedIndex = calendarDate.getMonth();	
				else selMonth.value = calendarDate.getMonth()+1;
			
				if(selDay.type=="select-one") selDay.selectedIndex = calendarDate.getDate()-1;	
				else selDay.value = calendarDate.getDate();
			
				selYear.value = calendarDate.getFullYear();
				calendarContainer.style.display=calendarVisibility;
			};
		}
		
		function getSelectedDates(calendarId){
			return calendarArray[calendarId].getSelectedDates();
		}
		
		function resetSelectedDates(calendarId){
			calendarArray[calendarId].reset();
		}
