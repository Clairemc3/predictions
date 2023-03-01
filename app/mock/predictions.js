const premierLeagueQuestions = require('./_questionsGroupQuestions/_premier-league')
const championshipQuestions = require('./_questionsGroupQuestions/_championship')
const leagueOneQuestions = require('./_questionsGroupQuestions/_league-one')
const leagueTwoQuestions = require('./_questionsGroupQuestions/_league-two')

module.exports = [{
  name: '2022',
  id: 1,
  sections: [
    {
      title: 'Premier League',
      groups: premierLeagueQuestions,
      order: 1
    },
    {
      title: 'Championship',
      groups: championshipQuestions,
      order: 2
    },
    {
      title: 'League One',
      groups: leagueOneQuestions,
      order: 3
    },
    {
      title: 'League Two',
      groups: leagueOneQuestions,
      order: 4
    },
    {
      title: 'League Two',
      groups: leagueOneQuestions,
      order: 4
    },
  ]
}]
