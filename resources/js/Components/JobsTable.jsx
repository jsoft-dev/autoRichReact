import React from 'react';
import { DataTable } from 'primereact/datatable';
import { Column } from 'primereact/column';
import 'primereact/resources/themes/lara-light-blue/theme.css';
import 'primereact/resources/primereact.min.css';
import 'primeicons/primeicons.css';

const jobs = [
    { id: 1, title: 'Frontend Developer', company: 'Acme Corp', location: 'Remote' },
    { id: 2, title: 'Backend Developer', company: 'Beta LLC', location: 'New York' },
    { id: 3, title: 'Full Stack Engineer', company: 'Gamma Inc', location: 'San Francisco' },
];

export default function JobsTable() {
    return (
        <DataTable value={jobs} paginator rows={5} responsiveLayout="scroll">
            <Column field="id" header="ID" sortable></Column>
            <Column field="title" header="Title" sortable></Column>
            <Column field="company" header="Company" sortable></Column>
            <Column field="location" header="Location" sortable></Column>
        </DataTable>
    );
}

