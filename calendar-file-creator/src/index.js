var XMLHttpRequest = require('xmlhttprequest').XMLHttpRequest;
const createCsvWriter = require('csv-writer').createObjectCsvWriter;
const moment = require('moment');
const fs = require('fs');

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		myObj = JSON.parse(this.responseText);
		writeCsvFile(myObj, currentTeamName);
	}
};

let currentTeamName = '';

function openRequest(teamName) {
	currentTeamName = teamName;
	xmlhttp.open('GET', 'http://android.handball-weilheim.de/webhandball/json-calendar-data.php?site=' + teamName);
	xmlhttp.send();
}

// https://manas.tungare.name/software/csv-to-ical/
// Subject	Start Date	Start Time	End Date	End Time	All Day	Description	Location	UID
let csvConfig = {
	path: null,
	header: [
		{ id: 'subject', title: 'Subject' },
		{ id: 'startDate', title: 'Start Date' },
		{ id: 'startTime', title: 'Start Time' },
		{ id: 'endDate', title: 'End Date' },
		{ id: 'endTime', title: 'End Time' },
		{ id: 'allDay', title: 'All Day' },
		{ id: 'description', title: 'Description' },
		{ id: 'location', title: 'Location' },
		{ id: 'uid', title: 'UID' }
	]
};

const saison = '20_21';
const teamMap = {
	erste: 'H1',
	zweite: 'H2',
	damen: 'D1',
	damen2: 'D2',
	js: 'JS',
	ad: 'AD',
	// jugend
	a_maennlich: 'AM',
	b_maennlich: 'BM',
	c_maennlich: 'CM',
	d_maennlich: 'DM',
	a_weiblich: 'AW',
	b_weiblich: 'BW',
	c_weiblich: 'CW',
	d_weiblich: 'DW'
};

function writeCsvFile(myObj, teamName) {
    csvConfig.path = './output/' + 'spielplan_' + teamName + '_' + saison + '.csv';
 
    // writeFile function with filename, content and callback function
    fs.writeFile(csvConfig.path, '', function (err) {
        if (err) throw err;
        console.log('File is created successfully.');
    }); 

	const csvWriter = createCsvWriter(csvConfig);

	const records = myObj.map((obj, idx) => {
		const dateString = moment(obj.gDate, 'DD.MM.YY').format('MM/DD/YYYY');
		return {
			subject: teamMap[teamName] + ': ' + obj.gHomeTeam + ' - ' + obj.gGuestTeam,
			startDate: dateString,
			startTime: moment(obj.gTime, 'hh:mm').format('LT').toLocaleLowerCase().replace(/\s/g, ''),
			endDate: dateString,
			endTime: moment(obj.gTime, 'hh:mm').add(2, 'hours').format('LT').toLocaleLowerCase().replace(/\s/g, ''),
			allDay: false,
			description: teamMap[teamName] + ': ' + obj.gHomeTeam + ' - ' + obj.gGuestTeam,
			location: obj.gGymnasiumNo,
			uid: 'tsvw_' + teamName + '_' + saison + '_' + idx
		};
	});

	csvWriter
		.writeRecords(records) // returns a promise
		.then(() => {
			console.log('...Done');
		});
}

// Create requests to api
/* 
openRequest('erste')
openRequest('zweite')
openRequest('damen')
openRequest('damen2')
openRequest('js')
openRequest('ad')
openRequest('a_maennlich')
openRequest('b_maennlich')
openRequest('c_maennlich')
openRequest('d_maennlich')
openRequest('a_weiblich')
openRequest('b_weiblich')
openRequest('c_weiblich')
openRequest('d_weiblich')
*/

openRequest('erste');
