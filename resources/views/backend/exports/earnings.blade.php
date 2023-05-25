<table>
    <thead>
        <tr>
            <th>SL. No.</th>
            <th>Title</th>
            <th>Type</th>
            <th>Sold Amount</th>
            <th>Your Earning (80%)</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($downloads as $download)
            <tr class="border-bottom align-middle">
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $download->file->title }}</td>
                <td>
                    @if ($download->file->file_type == 1)
                        Free
                    @else
                        Premium
                    @endif
                </td>
                <td>{{ $download->amount }}</td>
                <td>{{ $download->amount * (80 / 100) }}</td>
                <td>{{ $download->created_at->format('d/m/Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
