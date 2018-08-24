
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// Controlpanel Dashboard Scripts
import Dashboard from './controlpanel/dashboard';
window.Dashboard = Dashboard;

// Controlpanel Question Scripts
import Questions from './controlpanel/questions';
window.Questions = Questions;


